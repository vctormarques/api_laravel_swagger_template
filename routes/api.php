<?php

use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Support\Facades\Route;



Route::group([
    'namespace' => 'App\Http\Controllers\Api\v1',
    'prefix' => 'v1',
], function () {
    Route::post('login', 'LoginController@login');
    
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('refresh-token', 'LoginController@refreshToken');
        Route::get('logout', 'LoginController@logout');
        Route::get('users', 'UserController@index');
    });
});
