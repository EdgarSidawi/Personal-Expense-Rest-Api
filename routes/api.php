<?php

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::get('session','SessionController@index');
Route::get('session/completed','SessionController@completed');
Route::post('session','SessionController@store');
Route::delete('session/{session}','SessionController@destroy');

Route::apiResource('{session}/expense','ExpenseController');



