<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware('auth');
Route::get('login',[App\Http\Controllers\ClientController::class, 'viewLoginPage'])->name('login');
Route::post('login',[App\Http\Controllers\ClientController::class, 'login_validate']);
Route::get('logout',[App\Http\Controllers\ClientController::class, 'logout'])->name('logout');
Route::get('register',[App\Http\Controllers\ClientController::class, 'viewRegPage'])->name('register');
Route::post('register',[App\Http\Controllers\ClientController::class, 'register_validate']);

Route::middleware('auth')->group(function(){
    Route::get('reserve-parking',[App\Http\Controllers\ClientController::class, 'viewReserve'])->name('reserve');
    Route::post('reserve-parking',[App\Http\Controllers\ClientController::class, 'reserve']);
    Route::get('confirmation/{id}',[App\Http\Controllers\ClientController::class, 'viewConfirmation'])->name('confirmation');
    Route::post('confirmation/{id}',[App\Http\Controllers\ClientController::class, 'confirm']);
    Route::get('success/{id}',[App\Http\Controllers\ClientController::class, 'success'])->name('success');
    Route::get('entry',[App\Http\Controllers\ClientController::class, 'viewEntry'])->name('entry');
    Route::post('entry',[App\Http\Controllers\ClientController::class, 'entry']);
});


Route::get('getData',[App\Http\Controllers\FirebaseController::class, 'getData']);
Route::get('client-dashboard',[App\Http\Controllers\ClientController::class, 'viewDashboard']);
Route::get('admin/dashboard',[App\Http\Controllers\AdminController::class, 'viewAdminDashboard']);
Route::get('enable-card-wash',[App\Http\Controllers\FirebaseController::class, 'enableCarWash'])->name('enable-car-wash');
Route::get('enable-card-wash-client/{id}',[App\Http\Controllers\FirebaseController::class, 'enableCarWashClient'])->name('client-enable-car-wash');
Route::get('disable-card-wash-client/{id}',[App\Http\Controllers\FirebaseController::class, 'disableCarWashClient'])->name('client-disable-car-wash');
Route::get('disable-card-wash',[App\Http\Controllers\FirebaseController::class, 'disableCarWash'])->name('disable-car-wash');
Route::get('open-gate',[App\Http\Controllers\FirebaseController::class, 'openGate'])->name('open-gate');
Route::get('sms',[App\Http\Controllers\AdminController::class, 'sms']);

// new changes