<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/tuto', ['as'=>'tuto', 'uses'=>'GuestController@tuto']);


Route::get('/admin', ['as'=>'admin', 'middleware'=>'auth', 'uses'=>'AdminController@home']);

Route::get('/resetScore', ['uses'=>'AdminController@resetScore']);

Route::post('/imageHandler', ['as'=>'imageHandler', 'uses'=>'AdminController@imageHandler']);


Route::auth();

Route::get('/home', 'HomeController@index');


/* DEBUG */

Route::get('/addImages', ['uses'=>'AdminController@addImages']);

