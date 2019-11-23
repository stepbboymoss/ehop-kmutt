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

// Route::get('map', function () {
//     return view('map');
// });

Route::get('test', function () {
    return view('ebus');
});

Route::get('mail', function () {
    $mail = new HelloMail(['customer' => 'John']);
    Mail::to('stepbboymosstu@gmail.com')->send($mail);
});

// Route::resource('/place', 'PlaceController' );

Route::resource('/ebus', 'LocationController');

Route::resource('/map', 'PlaceController');

Auth::routes();
