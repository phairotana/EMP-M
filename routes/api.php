<?php

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DepartmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('departments',[DepartmentController::class, 'index']);
Route::get('departments/{id}',[DepartmentController::class, 'show']);
Route::post('departments',[DepartmentController::class, 'store']);
Route::put('departments/{id}',[DepartmentController::class, 'update']);
Route::delete('/departments/{id}',[DepartmentController::class, 'destroy']);

Route::get('search/name',[DepartmentController::class, 'search']);

