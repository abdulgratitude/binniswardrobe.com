<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('master')->as('master.')->group(function () {
    Route::prefix('continental')->as('continental.')->group(function () {
        Route::get('/', 'users\master\ContinentalController@index')->name('home');
        Route::post('show', 'users\master\ContinentalController@show')->name('show');
        Route::post('store', 'users\master\ContinentalController@store')->name('store');
        Route::post('edit', 'users\master\ContinentalController@edit')->name('edit');
        Route::post('update', 'users\master\ContinentalController@update')->name('update');
    });

    Route::prefix('country')->as('country.')->group(function () {
        Route::get('/', 'users\master\CountryController@index')->name('home');
        Route::post('show', 'users\master\CountryController@show')->name('show');
        Route::post('store', 'users\master\CountryController@store')->name('store');
        Route::post('edit', 'users\master\CountryController@edit')->name('edit');
        Route::post('update', 'users\master\CountryController@update')->name('update');
    });
});

Route::prefix('select-options')->as('selectOptions.')->group(function () {
    Route::post('/gsbc', 'SelectOptionsController@getStateByCountry')->name('getStateByCountry');
    Route::post('/gcbs', 'SelectOptionsController@getCityByState')->name('getCityByState');
    Route::post('/gtbc', 'SelectOptionsController@getTownByCity')->name('getTownByCity');
    Route::post('/gjrbf', 'SelectOptionsController@getJobRoleByFunction')->name('getJobRoleByFunction');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
