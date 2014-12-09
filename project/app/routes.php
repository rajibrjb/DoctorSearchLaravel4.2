<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::model('doctor','Doctor');
Route::model('category','Category');
Route::model('area','Area');


Route::get('/','myController@home');
Route::get('/about','myController@about');
Route::get('/contact','myController@contact');

Route::get('/userRegistretion','myController@userRegistretion');
Route::get('/doctorRegistretion','myController@doctorRegistretion');
Route::get('/hospitalRegistretion','myController@hospitalRegistretion');

Route::get('/seeUsers','myController@seeUsers');
Route::get('/seeDoctors','myController@seeDoctors');

Route::get('/searchDoctors','myController@searchDoctors');
Route::get('/searchDoctors/{area}','myController@searchDoctorsWithArea');
Route::get('/searchDoctorsc/{category}','myController@searchDoctorsWithCategory');



Route::get('/showDetails/{doctor}','myController@showDetails');

Route::post('/userRegistretion','myController@save_new_user');
Route::post('/doctorRegistretion','myController@save_new_doctor');
Route::post('/hospitalRegistretion','myController@save_new_hospital');

Route::post('/searchDoctors','myController@search_doctor_with_given_info');

Route::post('/showDetails/{doctor}','myController@save_new_doctor_review');