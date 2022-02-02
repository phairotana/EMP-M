<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Auth\RegisterController;


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
Route::get('/', function() {
    return redirect('login');
})->name('login');

Route::group(
    [
        'namespace'  => 'App\Http\Controllers',
        // 'middleware' => config('backpack.base.web_middleware', 'web'),
        'prefix'     => '/',
    ],
    function () {

        Route::get('login', 'Auth\UserController@loginForm')->name('login');
        Route::post('logme-in', 'Auth\UserController@login');

        Route::get('register', 'Auth\RegisterController@frmRegister');
        Route::post('register-me', 'Auth\RegisterController@register');

    });

Route::group(
    [
        'namespace'  => 'App\Http\Controllers',
        // 'middleware' => config('backpack.base.web_middleware', 'web'),
        'prefix'     => 'Admin',
    ],
    function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

        // Route::get('user-list', Auth\UserController::class, 'index');
        Route::get('user', 'Auth\UserController@userForm');
        Route::post('user/create', 'Auth\UserController@createUser');

        Route::resource('user-list', Auth\AuthenticateController::class);
    });

