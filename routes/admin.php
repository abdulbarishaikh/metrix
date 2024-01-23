<?php
use App\Http\Controllers\Admin\AuthController;

Route::controller(AuthController::class)->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', 'index')->name('admin');
    });
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::post('/login', 'login')->name('post-login');
    Route::get('/logout', 'logout')->name('logout');
});
?>