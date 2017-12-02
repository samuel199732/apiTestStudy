<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/email/all', 'EmailController@allEmailCompany')->middleware('closeapi');
Route::post('/email/info', 'EmailController@statusEmail')->middleware('closeapi');
Route::resource('email', 'EmailController')->middleware('closeapi');

Route::resource('access', 'AccessController');


Route::resource('company', 'CompanyController');