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
    //creating and getting locality
    Route::get('continental', 'users\master\LocalityController@getContinental')->name('continental');
    Route::get('countries', 'users\master\LocalityController@getCountries')->name('countries');
    Route::get('states', 'users\master\LocalityController@getStates')->name('states');
    Route::get('cities', 'users\master\LocalityController@getCities')->name('cities');
    Route::get('towns', 'users\master\LocalityController@getTowns')->name('towns');
    Route::post('create-continental', 'users\master\LocalityController@createContinental')->name('create.continental');
    Route::post('create-country', 'users\master\LocalityController@createCountry')->name('create.country');
    Route::post('create-state', 'users\master\LocalityController@createState')->name('create.state');
    Route::post('create-city', 'users\master\LocalityController@createCity')->name('create.city');
    Route::post('create-town', 'users\master\LocalityController@createTown')->name('create.town');
    Route::post('update-continental', 'users\master\LocalityController@updateContinental')->name('update.continental');
    Route::post('update-country', 'users\master\LocalityController@updateCountry')->name('update.country');
    Route::post('update-state', 'users\master\LocalityController@updateState')->name('update.state');
    Route::post('update-city', 'users\master\LocalityController@updateCity')->name('update.city');
    Route::post('update-town', 'users\master\LocalityController@updateTown')->name('update.town');
});

Route::prefix('select-options')->as('selectOptions.')->group(function () {
    Route::post('/gsbc', 'SelectOptionsController@getStateByCountry')->name('getStateByCountry');
    Route::post('/gcbs', 'SelectOptionsController@getCityByState')->name('getCityByState');
    Route::post('/gtbc', 'SelectOptionsController@getTownByCity')->name('getTownByCity');
    Route::post('/gjrbf', 'SelectOptionsController@getJobRoleByFunction')->name('getJobRoleByFunction');
});
