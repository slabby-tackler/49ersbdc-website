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

Auth::routes();

Route::group(['middleware' => ['web']], function() {
    Route::get('/', 'HomeController@index');
    Route::get('/lesson', 'HomeController@lesson');
    Route::get('/officers', 'HomeController@officers');
    Route::get('/contact', 'HomeController@contact');
});
