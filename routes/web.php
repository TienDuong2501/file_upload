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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test');
Route::post('getMethod/{id}', 'HomeController@getMethod');
Route::get('upload', 'uploadController@index');
Route::post('store', 'uploadController@store');
Route::get('show', 'uploadController@show');
Route::get('file', 'FileController@showUploadForm')->name('upload.file');
Route::post('file', 'FileController@storeFile');
Route::get('multiFile', 'FileController@showMultiForm');
Route::post('multiFile', 'FileController@storeMultiFile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
