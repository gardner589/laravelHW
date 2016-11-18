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

Route::get('/requests', 'EOSRequestsController@index');
Route::get('/requests/create', 'EOSRequestsController@create');
Route::get('/requests/{request}', 'EOSRequestsController@show');
Route::post('/requests', 'EOSRequestsController@store');
