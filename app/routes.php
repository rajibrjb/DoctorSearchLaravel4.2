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

Route::get('/doctorLogin','myController@doctorLogin');
Route::get('/userLogin','myController@userLogin');


Route::get('/userRegistretion','myController@userRegistretion');
Route::get('/doctorRegistretion','myController@doctorRegistretion');
Route::get('/hospitalRegistretion','myController@hospitalRegistretion');

Route::get('/searchDoctors','myController@searchDoctors');
Route::get('/searchDoctors/{area}','myController@searchDoctorsWithArea');
Route::get('/searchDoctorsc/{category}','myController@searchDoctorsWithCategory');

Route::get('/showDoctorDetails/{doctor}','myController@showDoctorDetails');

Route::get('/doctorLogout','myController@doctorLogout');
Route::get('/userLogout','myController@userLogout');

Route::post('/userRegistretion','myController@save_new_user');
Route::post('/doctorRegistretion','myController@save_new_doctor');
Route::post('/hospitalRegistretion','myController@save_new_hospital');


Route::post('/doctorLogin','myController@doDoctorLogin');
Route::post('/userLogin','myController@doUserLogin');

Route::post('/searchDoctors','myController@search_doctor_with_given_info');

Route::post('/showDoctorDetails/{doctor}','myController@save_new_doctor_review');

Route::post('/contact','myController@contactSuccess');

//Temp routs
Route::get('/seeUsers','myController@seeUsers');
Route::get('/seeDoctors','myController@seeDoctors');
Route::get('/news','myController@news');
Route::get('/tips','myController@tips');
Route::post('/news','myController@save_new_news');
Route::post('/tips','myController@save_new_tips');