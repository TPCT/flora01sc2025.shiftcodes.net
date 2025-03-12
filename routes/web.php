<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiersController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\UserSettingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});
Route::get('about', function () {
    return view('about.index');
});
Route::get('tos', function () {
    return view('Terms Of Service.index');
});
Route::get('api', function () {
    return view('Api.index');
});
Route::get('reports', function () {
    return view('Reports.index');
});

Route::get('/contact', [MessageController::class, 'index'])->name('contact.index');
Route::post('/messages', [MessageController::class, 'store'])->name('message.store');

Route::get('/tiers', [TiersController::class, 'index']);
Route::get('/settings', [TiersController::class, 'getSettings']);

Route::get('/upload', [VideoController::class, 'create'])->name('upload');
Route::post('/upload', [VideoController::class, 'store'])->name('videos.store');
Route::post('/upload/url', [VideoController::class, 'storeFromUrl'])->name('videos.store.url');

Route::get('/premium', [StripeController::class, 'index'])->name('premium.index');
Route::post('/checkout', [StripeController::class, 'createCheckoutSession'])->name('stripe.checkout');
Route::get('/payment-success', [StripeController::class, 'paymentSuccess'])->name('payment.success');
Route::get('/payment-cancel', [StripeController::class, 'paymentCancel'])->name('payment.cancel');

Route::get('/account', [AccountController::class, 'index'])->name('account.index');


Route::post('/account/update', [AccountController::class, 'updateAccount'])->name('account.update');


Route::post('/account/security', [SecurityController::class, 'updateSecurity'])->name('user.updateSecurity');



Route::post('/player/update', [UserSettingController::class, 'updatePlayerSettings'])->name('player.update');

Route::post('/payment/update', [PaymentController::class, 'updatePayment'])->name('payment.update');
