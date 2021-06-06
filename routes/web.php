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

Route::get('/', function () {
    return view('insert');
});

Route::post('store','App\Http\Controllers\PostController@store');
Route::get('show','App\Http\Controllers\PostController@show');
Route::get('delete/{id}','App\Http\Controllers\PostController@destroy');
Route::get('edit/{id}','App\Http\Controllers\PostController@edit');
Route::post('update/{id}','App\Http\Controllers\PostController@update');
