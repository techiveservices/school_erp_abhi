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
use App\insertSchool;
/*=============School===============*/

//login
Route::get('/login', function(){

	return view('backend.login');
});

//dashboard
Route::get('/', function(){

	return view('backend/dashboard');

})->middleware('auth');

//view school
Route::get('/viewSchool', 'CreateSchoolController@index')->middleware('auth');


//insert schools
//Route::get('create-school', 'CreateSchoolController@index');
Route::post('/viewSchool', 'CreateSchoolController@upload')->middleware('auth');

/*==========Students===========*/
//view students
Route::get('viewStudents', 'StudentsController@view')->middleware('auth');

Route::post('viewStudents', 'StudentsController@create')->middleware('auth');
//---------------------//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');