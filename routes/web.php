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

Route::get('/', function () {
    return view('home');
}) -> name('home');

Route::post('employees/search', 'EmployeeController@search') -> name('employees.search');
Route::get('employees/search', function () {
    return redirect() -> route('employees.index');
});
Route::resource('employees', 'EmployeeController') -> except('show');


Route::post('applications/search', 'ApplicationController@search') -> name('applications.search');
Route::get('applications/search', function () {
    return redirect() -> route('applications.index');
});
Route::resource('applications', 'ApplicationController') -> except('show');
