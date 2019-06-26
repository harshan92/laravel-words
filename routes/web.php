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
Route::get('/', 'HomeController@index');
Route::get('/words', ['as'=>'mywords.index','uses'=>'WordController@index']);
Route::get('/create', ['as'=>'mywords.create','uses'=>'WordController@create']);
Route::get('/edit/{id}', ['as'=>'words.edit','uses'=>'WordController@edit']);
Route::post('/store', ['as'=>'words.store','uses'=>'WordController@store']);
Route::post('/update/{id}', ['as'=>'words.update','uses'=>'WordController@update']);
Route::delete('/delete/{id}', ['as'=>'words.destroy','uses'=>'WordController@destroy']);
Route::get('/show/{id}', ['as'=>'words.show','uses'=>'WordController@show']);
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
