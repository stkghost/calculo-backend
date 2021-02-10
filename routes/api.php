<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// public routes.
Route::get('/clients/all', 'Api\CommonController@getAllClients')->name('allclients.api');
Route::delete('/client/{id}', 'Api\CommonController@deleteClientById')->name('deleteclient.api');
Route::get('/client/{id}', 'Api\CommonController@getClientById')->name('getclient.api');
Route::get('/types/all', 'Api\CommonController@getAllTypes')->name('alltypes.api');
Route::post('/activity/create', 'Api\CommonController@createActivity')->name('createactivity.api');
Route::get('/activity_client/{id}', 'Api\CommonController@getActivitiesByClientId')->name('getactivitybyclientid.api');
Route::post('/client/create', 'Api\CommonController@createClient')->name('createclient.api');
Route::put('/client/{id}', 'Api\CommonController@updateClient')->name('updateclient.api');
Route::delete('/activity/{id}', 'Api\CommonController@deleteActivityById')->name('deleteactivity.api');
Route::put('/activity/{id}', 'Api\CommonController@updateActivity')->name('updateactivity.api');
Route::get('/activity/{id}', 'Api\CommonController@getActivityById')->name('getactivitybyid.api');
