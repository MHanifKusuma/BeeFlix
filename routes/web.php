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

Route::get('/', 'MovieController@loadHome');
Route::get('/all-movies', 'MovieController@getAllMovies');
Route::get('/drama-genre', 'GenreController@getDrama');
Route::get('/kids-genre', 'GenreController@getKids');
Route::get('/tvshow-genre', 'GenreController@getTvShow');
Route::get('/movies/{id}', 'MovieDetailController@getMovieDetail');
