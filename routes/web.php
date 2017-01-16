<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::resource('main', 'MainController');
Route::resource('school/update', 'EducationController@store');
Route::resource('school/destroy', 'EducationController@destroy');
Route::resource('job/update', 'JobExperienceController@store');
Route::resource('job/destroy', 'JobExperienceController@destroy');