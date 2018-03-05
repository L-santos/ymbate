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
    Route::get('create', 'PageController@create')->name('page.create')->middleware('auth');
    Route::match(['get', 'post'] ,'{page}', 'PageController@show')->name('page.show');
    Route::get('{page}/edit', 'PageController@edit')->name('page.edit');
    Route::post('', 'PageController@store')->name('page.store')->middleware('auth');
    Route::patch('', 'PageController@update')->name('page.update');

    Route::get('{page}/{thread}/comments', 'ThreadController@show')->name('thread.show');
    Route::get('{page}/submit', 'ThreadController@create')->name('thread.create')->middleware('auth');
    Route::post('page/submit', 'ThreadController@store')->name('thread.store');

});

Route::prefix('u')->group(function(){
    Route::get('subscriptions', 'UserController@pages')->name('user.pages');
    Route::get('{user}', 'UserController@show')->name('user.show');
});
