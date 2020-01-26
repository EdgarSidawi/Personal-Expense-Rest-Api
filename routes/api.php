<?php

Route::group([

    'prefix' => 'auth'

], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::get('session','SessionController@index');
Route::get('session/completed','SessionController@completed');
Route::post('session','SessionController@store');
Route::delete('session/{session}','SessionController@destroy');

Route::apiResource('{session}/expense','ExpenseController');



