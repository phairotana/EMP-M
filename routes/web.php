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

Route::group(
    [
        'namespace'  => 'App\Http\Controllers',
        // 'middleware' => config('backpack.base.web_middleware', 'web'),
        'prefix'     => 'admin',
    ],
    function () {
        // if not otherwise configured, setup the auth routes
            // Authentication Routes...
            Route::post('login', 'Auth\LoginController@login');
            Route::post('logout', 'Auth\LoginController@logout');

            Route::get('dashboard', 'AdminController@dashboard');

    });