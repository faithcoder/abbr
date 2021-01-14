<?php

use Illuminate\Support\Facades\Route;
use App\Models\Abbr;
use Illuminate\Http\Request;
use App\Http\Controllers\AbbrController;

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


Route::get('/','App\Http\Controllers\AbbrController@index')->name('index');
Route::get('/create','App\Http\Controllers\AbbrController@create')->name('create');
Route::post('/save','App\Http\Controllers\AbbrController@saveAbbr')->name('save');
Route::get('delete/{id}', 'App\Http\Controllers\AbbrController@destroy')->name('destroy');
Route::get('edit/{id}', 'App\Http\Controllers\AbbrController@edit')->name('edit');
Route::post('update/{id}', 'App\Http\Controllers\AbbrController@update')->name('update');

