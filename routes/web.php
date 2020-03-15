<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/tasks/create','TaskController@create');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/{task}','TaskController@show');
Route::post('/tasks/create','TaskController@store');
Route::put('/tasks/{task}','TaskController@update');
Route::get('/tasks/{task}/edit','TaskController@edit');
Route::delete('/tasks/{task}','TaskController@destroy');
