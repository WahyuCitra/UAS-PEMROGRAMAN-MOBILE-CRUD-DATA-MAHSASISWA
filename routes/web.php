<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/data', 'DataController@index');
Route::get('/data/create', 'DataController@create');
Route::post('/data', 'DataController@store');
Route::get('/data/{id}/edit','DataController@edit');
Route::patch('/data/{id}','DataController@update');
Route::delete('/data/{id}', 'DataController@destroy');
