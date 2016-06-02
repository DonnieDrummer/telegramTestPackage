<?php
/**
 * Created by PhpStorm.
 * User: donnie
 * Date: 1/6/16
 * Time: 1:33 PM
 */

Route::group(['prefix' => 'telegram', 'namespace' => 'Donnie\TelegramBot\Http\Controllers'], function () {
    Route::any('/', [
        'uses' => 'HomeController@getIndexAction'
    ]);
});