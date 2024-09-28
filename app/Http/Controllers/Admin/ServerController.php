<?php

namespace App\Http\Controllers\Admin;

use App\Enums\AccountType;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ServerController extends Controller
{
    function __construct(Request $request)
    {
        if (Auth::user()->account_type !== AccountType::SUPER_ADMIN) {
            abort(404);
        }
    }

    public function index()
    {
        return view('pages.server.index');
    }

    public function migrate(Request $request)
    {
        try {
            Artisan::call('migrate:fresh --seed');
            $output = Artisan::output();
            return redirect()->route('server.index')->with('statusSuccess', 'Command executed successfully');
        } catch (\Exception $e) {
            return redirect()->route('server.index')->with('statusError', $e->getMessage());
        }


    }

    public function optimize(Request $request)
    {
        try {
            Artisan::call('optimize:clear');
            $output = Artisan::output();
            return redirect()->route('server.index')->with('statusSuccess', 'Command executed successfully');
        } catch (\Exception $e) {
            return redirect()->route('server.index')->with('statusError', $e->getMessage());
        }
    }

    public function clearCache(Request $request)
    {
        try {
            Artisan::call('cache:clear');
            $output = Artisan::output();
            return redirect()->route('server.index')->with('statusSuccess', 'Command executed successfully');
        } catch (\Exception $e) {
            return redirect()->route('server.index')->with('statusError', $e->getMessage());
        }
    }
}
