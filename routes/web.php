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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*
General
*/
Route::get('/general', 'applicatns\GeneralController@index');
/*
professionals
*/
Route::get('/professional', 'applicatns\ProfessionalController@index');
/*
Cooperates
*/
Route::get('/cooperates', 'applicatns\CooperateController@index');
/*
Student
*/
Route::get('/students', 'applicatns\StudentController@index');
/*
Retired
*/
Route::get('/retired', 'applicatns\RetiredController@index');
