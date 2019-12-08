<?php

use App\Mail\HelloMail;

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

// Route::get('/send/email', 'HomeController@mail');

// Route::get('test', function () {
//     return view('ebus');
// });

// Route::get('mail', function () {
//     $mail = new HelloMail(['customer' => 'John']);
//     Mail::to('stepbboymosstu@gmail.com')->send($mail);
// });

// Route::get('/test', 'PlaceController@create' );

Route::resource('/ebus', 'LocationController');

Route::resource('/map', 'PlaceController');

Route::get('firebase/{bus}/{lat}/{long}/{speed}','SaveFirebaseController@index');
Route::get('firebase/getlocation','FirebaseController@get_location');
Route::get('countimage','LocationController@countimg');
Route::get('savecount','LocationController@savecount');
Route::get('firebase/getpeople','FirebaseController@get_people');
Route::get('firebase/{bus}/{num}','SaveFirebaseController@indexpeople');
// Route::get('firebasenew/{num}','FirebaseController@indexnew');
// Route::get('firebasenew/getpeople','FirebaseController@get_peoplenew');


Route::get('dashboard_ebus', 'DashboardController@index');
Route::get('search', 'DashboardController@search');

// Route::get('search', 'DashboardController@barchartbus1');
Route::get('chartbus', 'DashboardController@barchartbus');
Route::get('chartbus1', 'DashboardController@barchartbus1');
Route::get('chartbus2', 'DashboardController@barchartbus2');


Route::get('test', 'DashboardController@index');

Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
