<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\DepartmentController;



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
        'prefix'     => 'admin',
    ],
    function () {
        Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');


        Route::get('user', 'Auth\UserController@userForm');
        Route::post('user/create', 'Auth\UserController@createUser')->name('admin.user.create');
        Route::get('user-list', 'Auth\UserController@list');
        Route::get('user-list/{id}', 'Auth\UserController@destroy');
        Route::get('user/{id}/show', 'Auth\UserController@show');
        Route::get('user/{id}/edit', 'Auth\UserController@edit');

        Route::post('user/{id}/update', 'Auth\UserController@update');
//
        Route::get('department/list', 'DepartmentController@index');
        Route::get('department/create', 'DepartmentController@create');
        Route::post('department/store','DepartmentController@store')->name('admin.department.store');
        Route::get('department/{id}/show', 'DepartmentController@show');
        Route::get('department/{id}/edit', 'DepartmentController@edit');
        Route::post('department/{id}/update', 'DepartmentController@update');
        Route::get('department-list/{id}', 'DepartmentController@destroy');
//

        Route::get('employee/list', 'EmployeeController@index');
        Route::get('employee/create', 'EmployeeController@create');
        Route::post('employee/store','EmployeeController@store');
        Route::get('employee/{id}/show', 'EmployeeController@show');
        Route::get('employee/{id}/edit', 'EmployeeController@edit');
        Route::post('employee/{id}/update', 'EmployeeController@update');
        Route::get('employee-list/{id}', 'EmployeeController@destroy');
//
        Route::get('salary/list', 'SalaryController@index');
        Route::get('salary/create', 'SalaryController@create');
        Route::post('salary/store', 'SalaryController@store')->name('admin.salary.store');
        Route::get('salary/{id}/show', 'SalaryController@show');
        Route::get('salary/{id}/edit', 'SalaryController@edit');
        Route::post('salary/{id}/update', 'SalaryController@update');
        Route::get('salary-list/{id}', 'SalaryController@destroy');

    });
    Route::get('audits', 'AuditController@index')
    ->middleware('auth', \App\Http\Middleware\AllowOnlyAdmin::class);

    Route::get('home', [ProductController::class, 'getProducts']);

    Route::get('/products/create-pdf', [ProductController::class, 'exportPDF']);
