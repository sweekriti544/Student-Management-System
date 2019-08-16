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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student/show/{id}',['as'=>'student.show','uses'=>'StudentController@show']);
Route::get('/student/create',['as'=>'student.create','uses'=>'StudentController@create']);
Route::post('/student/store',['as'=>'student.store','uses'=>'StudentController@store']);
Route::get('/student/index',['as'=>'student.index','uses'=>'StudentController@index']);
Route::get('/student/edit/{id}',['as'=>'student.edit','uses'=>'StudentController@edit']);
Route::post('/student/update/{id}', 'StudentController@update')->name('student.update');
Route::get('/student/delete/{id}', 'StudentController@delete')->name('student.delete');



Route::get('/',['uses'=>'StudentController@index']);
Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login');
Route::post('logout','Auth\LoginController@logout')->name('logout');