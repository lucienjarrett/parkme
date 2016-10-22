<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');
Route::get('/contact', ['uses' =>'PagesController@create', 'as'=> 'contact']);
Route::post('/contact', ['uses'=>'PagesController@store', 'as'=>'contact.store']); 

Route::get('/about', ['uses' =>'PagesController@about', 'as'=> 'pages.about']);


Auth::routes();


