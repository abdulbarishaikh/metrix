<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Main;
use App\Livewire\Pages\Aboutus;
use App\Livewire\Pages\ContactUs;
use App\Livewire\Pages\Partners;
use App\Livewire\Pages\Resources;
use App\Livewire\Pages\Services;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Livewire\Main::class);
Route::get('/aboutus/{section?}', \App\Http\Livewire\Pages\Aboutus::class);
Route::get('/contactus', \App\Http\Livewire\Pages\ContactUs::class);
Route::get('/partners/{section?}', \App\Http\Livewire\Pages\Partners::class);
Route::get('/resources/{section?}', \App\Http\Livewire\Pages\Resources::class);
Route::get('/services/{section?}', \App\Http\Livewire\Pages\Services::class);
Route::post('/add-contact-detail',[ContactController::class, 'add_contact_detail'])->name('add-contact-detail');
Route::group(['prefix' => 'admin'], function(){
    Route::controller(AuthController::class)->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::get('/', 'index')->name('admin');
        });
        Route::get('/logout', 'logout')->name('logout');
    });
});
Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class, 'login'])->name('post-login');


