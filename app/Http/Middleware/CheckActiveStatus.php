<?php

namespace App\Http\Middleware;

use App\Enums\AccountType;
use App\Enums\ChargesType;
use App\Enums\TxnStatus;
use App\Helpers\CustomHelper;
use App\Models\Charges;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckActiveStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (
            Auth::check()
            && Auth::user()->is_active === 0
            && Auth::user()->account_type === AccountType::RETAILER
        ) {
            // create new transaction Order
            $charges = Charges::where('type', ChargesType::REGISTRATION_FEE)->first();

            $transactionOrder = Transaction::create([
                "order_id" => CustomHelper::generateOrderId(),
                "user_id" => Auth::user()->id,
                "amount" => $charges->amount,
                "date" => Carbon::now(),
                "status" => TxnStatus::PENDING,
            ]);
            
            return redirect()->route('payment.processing', [
                'transaction' => $transactionOrder->id
            ]);
        }
        return $next($request);
    }
}
