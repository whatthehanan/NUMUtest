<?php

use Illuminate\Http\Request;

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
// List employees
Route::get('employees', 'employeecontroller@index');
// List single employee
Route::get('employee/{id}', 'employeecontroller@show');
// Create new article
Route::post('employee', 'employeecontroller@store');
// Update article
Route::put('employee', 'employeecontroller@store');
// Delete article
Route::delete('employee/{id}', 'employeecontroller@destroy');