<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function() {
    Route::get('login', 'index')->name('login');
    Route::post('post-login', 'postLogin')->name('login.post');
    Route::get('registration', 'registration')->name('registration');
    Route::post('post-registration', 'postRegistration')->name('registration.post');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('logout', 'logout')->name('logout');
});
