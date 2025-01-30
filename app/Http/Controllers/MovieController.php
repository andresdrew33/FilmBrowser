<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use Doctrine\DBAL\Schema\View;

class MovieController extends Controller
{
    protected TmdbService $tmdbService;

    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function popular()
    {
        $movies = $this->tmdbService->fetchPopularMovies();
        return view('home',['movies'=>$movies]);
    }
}
