<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'StartController@index'
]);

/**
    Маршрут для изминения локализации приложения
 */
Route::get('lang/{lang}', [
    'as' => 'set.lang',
    'uses' => 'SetLanguage@index'
]);

/**
    Маршруты для администратора
 */
Route::group(['middleware' => 'admin'], function()
{
    Route::get('/admin', [
        'as' => 'admin',
        'uses' => 'Admin\AdminController@index'
    ]);
});

/**
    Маршруты для абитуриента
 */
Route::group(['middleware' => 'enrollee'], function()
{
    Route::resource('enrollee', 'Enrollee\EnrolleeController');
});


/**
    Auth routes
 */
Route::group(['middleware' => 'auth'], function()
{
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
});

    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');




