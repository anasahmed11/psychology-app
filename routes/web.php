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

Route::get('/','ViewsController@index');

Auth::routes();

Route::get('/start', 'HomeController@index');
Route::get('/finddoctor','ViewsController@patientindex');
Route::resource('views','ViewsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/newdoctor','ViewsController@doctor_request');
Route::post('/newdoctor','DoctorRequestsController@store');
Route::resource('doctor_requests','DoctorRequestsController');
Route::get('/contact-us','ViewsController@contact_us');
Route::post('/contact-us','ReviewsController@store');
Route::resource('reviews','ReviewsController');
