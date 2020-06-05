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
Route::resource('applications', 'ApplicationController');

Route::get('assistant/employee', 'AssistantController@employee_selector') -> name('assistant.employee');
Route::post('assistant/employee', 'AssistantController@employee_lookup') -> name('assistant.employee.lookup');
Route::post('assistant/store', 'ApplicationController@meta_store') -> name('assistant.store');

Route::get('assistant/basic/{employee}', 'AssistantController@basic_info') -> name('assistant.basic');
