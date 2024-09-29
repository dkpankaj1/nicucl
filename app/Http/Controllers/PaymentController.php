<?php

namespace App\Http\Controllers;

use App\Enums\TxnStatus;
use App\Models\Transaction;
use App\Models\User;
use App\Utility\CryptoUtility;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function __construct()
    {
        config(['app.timezone' => 'Asia/Kolkata']);
    }

    public function tnxProcess(Transaction $transaction)
    {

        if ($transaction && $transaction->status !== TxnStatus::SUCCESS) {
            $paramList = [
                'upiuid' => config('paytm.upi_id'),
                'token' => config('paytm.token'),
                'callback_url' => config('paytm.callback_url'),
                'orderId' => $transaction->order_id,
                'txnAmount' => $transaction->amount,
                'txnNote' => $transaction->notes,
                'cust_Email' => $transaction->user->email,
                'cust_Mobile' => $transaction->user->phone,
            ];
            $paramList['checksum'] = CryptoUtility::generateSignature($paramList, config('paytm.secret'));

            return view('pages.payment.process', [
                "paramList" => $paramList,
                'action' => config('paytm.tnx_url')
            ]);

        } else {
            abort(404);
        }

    }
    public function tnxResponse(Request $request)
    {
        $crypto = new CryptoUtility(config('paytm.token'), config('paytm.secret'));
        $decryptHash = $crypto->hashDecrypt($request->hash, config('paytm.secret'));
        $payload = json_decode($decryptHash, true);
        if (!CryptoUtility::verifySignature($decryptHash, config('paytm.secret'), $request->checksum)) {
            return redirect()->route('dashboard')->with('statusError', 'Invalid signature.');
        }

        $transaction = Transaction::where('order_id', $payload['orderId'])->firstOrFail();
        $user = $transaction->user;

        if ($request->status === "SUCCESS") {
            $user->update([
                'wallet' => $user->is_active ? $user->wallet + $payload['txnAmount'] : $user->wallet,
                'is_active' => $user->is_active ? $user->is_active : 1
            ]);
            $transaction->update(['status' => TxnStatus::SUCCESS]);
            return redirect()->route('dashboard')->with('statusSuccess', $request->message);
        }
        if ($request->status === "FAILED") {

            $transaction->update(['status' => TxnStatus::FAILED]);
            return redirect()->route('dashboard')->with('statusError', $request->message);
        }
        return redirect()->route('dashboard')->with('statusError', 'Unexpected transaction status.');
    }


    public function tnxCancelResponse(Request $request)
    {
        return view('pages.payment.cancel', [
            'message' => $request->result
        ]);
    }
}