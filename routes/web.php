<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard', function () {
//     return view('dashboard');
// });

Route::get('/', 'MainController@index');

Route::get('employee_form', 'MainController@employee_form');

Route::get('pensioner_form', 'MainController@pensioner_form');

// Department Routes in EmployeeController
Route::get('departments', 'EmployeesController@all_dept');

//Designation Routes in EmployeeController
Route::get('designations', 'EmployeesController@all_design');


Route::resource('users', 'UsersController');

Route::resource('banks', 'BanksController');

Route::resource('employees', 'EmployeesController');
