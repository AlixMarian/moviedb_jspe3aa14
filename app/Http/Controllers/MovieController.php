<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Genre;
use App\Models\Rating;
use App\Models\Reviewer;

class MovieController extends Controller
{
    public function allMovies()
    {
        return Movie::with('directors', 'actors', 'genres', 'ratings.reviewer')->get();
    }

    public function getMovie($id)
    {
        return Movie::with('directors', 'actors', 'genres', 'ratings.reviewer')->findOrFail($id);
    }

    public function getDirector($id)
    {
        return Director::with('movies')->findOrFail($id);
    }

    public function getActor($id)
    {
        return Actor::with('movies')->findOrFail($id);
    }

    public function moviesWithGenres()
    {
        return Movie::with('genres')->get();
    }

    public function moviesWithRatingsAndReviewers()
    {
        return Movie::with('ratings.reviewer')->get();
    }
}
