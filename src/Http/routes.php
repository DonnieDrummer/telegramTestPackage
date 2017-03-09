<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:33 PM
 */

Route::group(['prefix' => 'telegram', 'namespace' => 'Donnie\TelegramBot\Http\Controllers'], function () {
    Route::get('/', function () {
        return 'blablabla';
    });

    Route::post('/', 'HomeController@getIndexAction');
    Route::get('init-wh', ['as' => 'init', 'uses' => 'HomeController@getInitAction']);
});