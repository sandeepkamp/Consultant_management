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
Route::resource('customer', 'CustomerController');
Route::resource('products','ProductController');
Route::resource('agency','AgencyController');
Route::resource('processmanagement','ProcessManagementController');
Route::resource('doccument','DoccumentController');