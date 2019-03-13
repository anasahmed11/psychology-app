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
/* main views */
Route::get('/start', 'HomeController@index');
Route::get('/finddoctor','ViewsController@patientindex');
Route::get('/admin','ViewsController@admin_index')->middleware('auth');
Route::resource('views','ViewsController');
Auth::routes();

/* end main views*/

/* new doctor controllers */
Route::get('/newdoctor','ViewsController@doctor_request');
Route::post('/newdoctor','DoctorRequestsController@store');
Route::resource('doctor_requests','DoctorRequestsController');
/* end new doctor controllers */

/* contact-us controllers */
Route::get('/contact-us','ViewsController@contact_us');
Route::post('/contact-us','ReviewsController@store');
Route::resource('reviews','ReviewsController');
/* end contact-us controllers */

/* find doctor controllers */
Route::get('/finddoctor','ViewsController@patient_index')->middleware('auth');
Route::resource('views','ViewsController');
/* end find doctor controllers */

Route::get('/visit_method','VisitMethodsController@index');
Route::resource('visit_method','VisitMethodsController');
Route::put('/visit_method/{id}','VisitMethodsController@update');
Route::get('/visit_method/{id}','VisitMethodsController@edit');
Route::delete('/visit_method/{id}','VisitMethodsController@destroy');
Route::post('/visit_method','VisitMethodsController@store');

/* visit method */

Route::get('/payment_method','PaymentMethodsController@index');
Route::resource('payment_method','PaymentMethodsController');
Route::put('/payment_method/{id}','PaymentMethodsController@update');
Route::delete('/payment_method/{id}','PaymentMethodsController@destroy');
Route::post('/payment_method','PaymentMethodsController@store');
