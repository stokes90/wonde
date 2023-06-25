<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\EmployeeController;

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

Route::get('/', 'App\Http\Controllers\EmployeeController@displayEmployees');
Route::get('/employees', 'App\Http\Controllers\EmployeeController@displayEmployees');
Route::get('/employee/{employeeId}', 'App\Http\Controllers\EmployeeController@displayEmployeeClasses');
Route::get('/class/{classId}', 'App\Http\Controllers\EmployeeController@displayClass');

Route::get('/settings', 'App\Http\Controllers\SettingController@view');
Route::post('/settings', 'App\Http\Controllers\SettingController@store');
