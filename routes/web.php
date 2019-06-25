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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::get('/work', 'WorkController@index')->name('work');

Route::post('/chat', 'ChatController@store');

Route::get('/index', 'ChatController@index')->name('index');

Route::group(['middleware' => 'web'], function () {
    Route::get('fileUpload', function () {
        return view('fileUpload');
    });
    Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'HomeController@fileUpload']);
});
