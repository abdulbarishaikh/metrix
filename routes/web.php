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
use App\Http\Controllers\Admin\BenchProfileController;
use App\Http\Controllers\Admin\RequirementsController;
use App\Http\Controllers\Admin\PartnersController;

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
    Route::middleware(['auth'])->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/', 'index')->name('admin');
            Route::get('/logout', 'logout')->name('logout');
        });
        Route::controller(BenchProfileController::class)->prefix('bench')
        ->group(function () {
            Route::get('/', 'index')->name('bench-index');
            Route::get('/add', 'create')->name('add-bench');
            Route::get('/edit/{id}', 'edit')->name('edit-bench');
            Route::post('save','save')->name('save-bench');
            Route::post('/list', 'index')->name('bench-list');
            Route::get('/delete/{id}', 'delete')->name('bench-delete');
        });
        Route::controller(RequirementsController::class)->prefix('requirements')
        ->group(function () {
            Route::get('/', 'index')->name('requirements-index');
            Route::get('/add', 'create')->name('add-requirements');
            Route::get('/edit/{id}', 'edit')->name('edit-requirements');
            Route::post('save','save')->name('save-requirements');
            Route::post('/list', 'index')->name('requirements-list');
            Route::get('/delete/{id}', 'delete')->name('requirements-delete');
        });
        Route::controller(PartnersController::class)->prefix('partner')
        ->group(function () {
            Route::get('/', 'index')->name('partner-index');
            Route::get('/add', 'create')->name('add-partner');
            Route::get('/edit/{id}', 'edit')->name('edit-partner');
            Route::post('save','save')->name('save-partner');
            Route::post('/list', 'index')->name('partner-list');
            Route::get('/delete/{id}', 'delete')->name('partner-delete');
        });
    });
});
Route::get('/login', [AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[AuthController::class, 'login'])->name('post-login');


