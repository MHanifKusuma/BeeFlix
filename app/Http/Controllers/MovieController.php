<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function getAllMovies() {
        $movies = Movie::all();

        return View('all-movies', ['movies' => $movies]);
    }

    public function loadHome() {
        $movies = Movie::all();

        return View('home-page', ['movies' => $movies]);
    }
    
}
