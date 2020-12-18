<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function getDrama() {
        $movies = Movie::where('genre_id', '1')->get();

        return View('genre-page', ['movies' => $movies]);
    }

    public function getkids() {
        $movies = Movie::where('genre_id', '2')->get();

        return View('genre-page', ['movies' => $movies]);
    }

    public function getTvShow() {
        $movies = Movie::where('genre_id', '3')->get();

        return View('genre-page', ['movies' => $movies]);
    }
}
