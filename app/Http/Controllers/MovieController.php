<?php

namespace App\Http\Controllers;

use App\Services\TmdbService;
use Illuminate\Http\Request;
use Doctrine\DBAL\Schema\View;

class MovieController extends Controller
{
    protected TmdbService $tmdbService;

    public function __construct(TmdbService $tmdbService)
    {
        $this->tmdbService = $tmdbService;
    }

    public function home(){
        return view('home',[
            'popular_movies'=>$this->popular(),
            'top_rated_movies'=>$this->top_rated(),
        ]);
    }
    public function popular()
    {
        $popular_movies = $this->tmdbService->fetchPopularMovies();
        return $popular_movies;
    }

    public function top_rated(){
        $top_rated_movies = $this->tmdbService->fetchTopRatedMovies();
        return $top_rated_movies;
    }

    public function searchMovie(Request $request){

        $query = $request->input('query');
        if(!$query){
            return view('search',['movies'=>[]]);
        }

        $searched_movie = $this->tmdbService->searchMovie($query);
        return view('search',['movies'=>$searched_movie,'query'=>$query]);
    }
}
