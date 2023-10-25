<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bath_datas', 'App\Http\Controllers\Bath_dataController@index')->name('bath_datas.index');
Route::get('/bath_datas/create', 'App\Http\Controllers\Bath_dataController@create')->name('bath_datas.create');
Route::post('/bath_datas/store', 'App\Http\Controllers\Bath_dataController@store')->name('bath_datas.store');

