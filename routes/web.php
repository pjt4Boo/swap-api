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

// Index route
Route::get('/', 'IndexController@index');

// List routes
Route::get('/people', 'PersonController@list');
Route::get('/films', 'FilmController@list');
Route::get('/planets', 'PlanetController@list');
Route::get('/starships', 'StarshipController@list');
Route::get('/vehicles', 'VehicleController@list');
Route::get('/species', 'SpeciesController@list');

// ListById routes
Route::get('/people/{id}', 'PersonController@listById')->where('id', '[0-9]+');
Route::get('/films/{id}', 'FilmController@listById')->where('id', '[0-9]+');
Route::get('/planets/{id}', 'PlanetController@listById')->where('id', '[0-9]+');
Route::get('/starships/{id}', 'StarshipController@listById')->where('id', '[0-9]+');
Route::get('/vehicles/{id}', 'VehicleController@listById')->where('id', '[0-9]+');
Route::get('/species/{id}', 'SpeciesController@listById')->where('id', '[0-9]+');

// ListByTerm routes
Route::get('/people/{term}', 'PersonController@listByTerm')->where('id', '[A-Za-z\s]+');
Route::get('/films/{term}', 'FilmController@listByTerm')->where('id', '[A-Za-z\s]+');
Route::get('/planets/{term}', 'PlanetController@listByTerm')->where('id', '[A-Za-z\s]+');
Route::get('/starships/{term}', 'StarshipController@listByTerm')->where('id', '[A-Za-z\s]+');
Route::get('/vehicles/{term}', 'VehicleController@listByTerm')->where('id', '[A-Za-z\s]+');
Route::get('/species/{id}', 'SpeciesController@listByTerm')->where('id', '[A-Za-z\s]+');
