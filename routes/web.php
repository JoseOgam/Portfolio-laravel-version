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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::get('/work', 'WorkController@index')->name('work');

Route::post('/chat', 'ChatController@store');

Route::post('/project', 'ProjectController@store');

Route::get('/index', 'ChatController@index')->name('index');

Route::get('/work', 'WorkController@index')->name('work');

Route::get('/action', 'ActionController@index')->name('action');

Route::get('/brand', 'BrandController@index')->name('brand');

Route::get('/personal', 'PersonalController@index')->name('personal');

Route::get('/startup', 'StartupController@index')->name('startup');

Route::get('/log', 'VlogController@index')->name('log');

Route::get('/bizz', 'BizzController@index')->name('bizz');

Route::Resource('actions', 'ActionController');