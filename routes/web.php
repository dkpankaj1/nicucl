<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ServerController;
use App\Http\Middleware\CheckActiveStatus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth', CheckActiveStatus::class]], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // server route
    Route::get('server', [ServerController::class, 'index'])->name('server.index');
    Route::post('server/migrate', [ServerController::class, 'migrate'])->name('server.migrate');
    Route::post('server/optimize', [ServerController::class, 'optimize'])->name('server.optimize');
    Route::post('server/clear-cache', [ServerController::class, 'clearCache'])->name('server.clear-cache');
});

Route::middleware('auth')->group(function () {

    Route::get('payment/processing/{transaction}', [PaymentController::class, 'tnxProcess'])->name('payment.processing');
    Route::get('payment/response', [PaymentController::class, 'tnxResponse'])->name('payment.response');
    Route::post('payment/response', [PaymentController::class, 'tnxResponse'])->name('payment.response');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';
