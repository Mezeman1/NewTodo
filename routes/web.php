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

Route::get('/', 'TodoController@index')->name('todos.index');
Route::post('/todo', 'TodoController@store')->name('todos.store');
Route::delete('/todo/{todo}', 'TodoController@destroy')->name('todos.destroy');
Route::get('/todo/{todo}/edit', 'TodoController@edit')->name('todos.edit');
Route::patch('/todo/{todo}', 'TodoController@update')->name('todos.update');

