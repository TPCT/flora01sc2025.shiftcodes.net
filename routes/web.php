<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DmcaController,
    LangController,
    TiersController,
    VideoController,
    FolderController,
    StripeController,
    AccountController,
    MessageController,
    PaymentController,
    PasswordController,
    SecurityController,
    ChangeEmailController,
    UserSettingController
};

// الصفحات الأساسية
Route::view('/', 'home.index');
Route::view('about', 'about.index');
Route::view('tos', 'Terms Of Service.index');
Route::view('api', 'Api.index');
Route::view('reports', 'Reports.index');

// اللغة
Route::get('/change-lang/{lang}', [LangController::class, 'changeLang'])->name('change.lang');

// تواصل معنا
Route::controller(MessageController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact.index');
    Route::post('/messages', 'store')->name('message.store');
});

// الخطط والاشتراكات
Route::get('/tiers', [TiersController::class, 'index']);
Route::get('/settings', [TiersController::class, 'getSettings']);

// إدارة الفيديوهات
Route::controller(VideoController::class)->group(function () {
    Route::get('/videos', 'index')->name('videos.index');
    Route::get('/upload', 'create')->name('videos.create');
    Route::post('/upload', 'store')->name('videos.store');
    Route::post('/upload/url', 'storeFromUrl')->name('videos.store.url');
    Route::delete('/videos/{video}', 'destroy')->name('videos.destroy');
});

// إدارة الملفات (Folders)
Route::controller(FolderController::class)->group(function () {
    Route::get('/folders', 'index')->name('folders.index');
    Route::post('/folders/store', 'store')->name('folders.store');
    Route::delete('/folders/{folder}', 'destroy')->name('folders.destroy');
});

// الدفع والاشتراكات المميزة
Route::controller(StripeController::class)->group(function () {
    Route::get('/premium', 'index')->name('premium.index');
    Route::post('/checkout', 'createCheckoutSession')->name('stripe.checkout');
    Route::get('/payment-success', 'paymentSuccess')->name('payment.success');
    Route::get('/payment-cancel', 'paymentCancel')->name('payment.cancel');
});

// الحساب والإعدادات
Route::controller(AccountController::class)->group(function () {
    Route::get('/account', 'index')->name('account.index');
    Route::post('/account/update', 'updateAccount')->name('account.update');
});

Route::post('/account/security', [SecurityController::class, 'updateSecurity'])->name('user.updateSecurity');

// حماية الحقوق (DMCA)
Route::get('/dmca', [DmcaController::class, 'index'])->name('dmca.index');

// إعدادات المستخدم
Route::controller(UserSettingController::class)->group(function () {
    Route::post('/player/update', 'updatePlayerSettings')->name('player.update');
});

// الدفع والتحديثات المالية
Route::controller(PaymentController::class)->group(function () {
    Route::post('/payment/update', 'updatePayment')->name('payment.update');
});

// حماية الصفحات الخاصة بالمستخدمين المسجلين فقط
Route::middleware(['auth'])->group(function () {
    Route::controller(PasswordController::class)->group(function () {
        Route::get('/change-password', 'showForm')->name('password.form');
        Route::put('/change-password', 'updatePassword')->name('password.update');
    });

    Route::controller(ChangeEmailController::class)->group(function () {
        Route::get('/change-email', 'showForm')->name('change.email');
        Route::post('/change-email', 'update')->name('change.email');
    });
});
