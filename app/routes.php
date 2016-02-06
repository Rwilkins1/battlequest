<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@name');

Route::post('/', 'HomeController@setname');

Route::get('/start', 'HomeController@title');

Route::post('/start', 'HomeController@startgame');

Route::get('/dungeon', 'HomeController@dungeon');

Route::get('/restart', 'HomeController@restart');