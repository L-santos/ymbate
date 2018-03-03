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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ThreadController@index')->name('thread.list');

Route::prefix('p')->group(function(){
    Route::get('/', 'PageController@index')->name('page.list');
    Route::get('{page}', 'PageController@show')->name('page.show');
    Route::get('create', 'PageController@create')->name('page.create');
    Route::post('', 'PageController@store')->name('page.store');
    Route::get('{page}/edit', 'PageController@edit')->name('page.edit');
    Route::post('', 'PageController@update')->name('page.update');

    Route::get('/{page}/{thread}', 'ThreadController@show')->name('thread.show');
});
