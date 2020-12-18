<?php

namespace App\Http\Controllers;

use App\Episode;
use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    public function getMovieDetail($movie_id) {
        
        $episodes = Episode::paginate(3);
        $episodes = Episode::where('movie_id', $movie_id)->paginate(3);

        return View('movie-detail-page', ['episodes' => $episodes]);
    }
}
