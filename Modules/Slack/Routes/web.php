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

Route::prefix('slack')->group(function() {
    Route::get('/', 'SlackController@index');
    Route::get('auth/redirect', 'SlackController@getSlackCode');
    Route::post('channel/message', 'SlackController@createChannelMessage');
    Route::post('command1', 'SlackController@getSlackCommand1');
});

