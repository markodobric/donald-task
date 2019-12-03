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

Route::get('tests', 'TestsController@index');
Route::get('tests/create', 'TestsController@create');
Route::post('tests/store', 'TestsController@store');

Route::get('/', function()
{
	return View::make('hello');
});
