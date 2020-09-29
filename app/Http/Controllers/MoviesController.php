<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{

    

    public function index() {
        $API_URI = 'https://api.themoviedb.org/3';
        
        

        $popularMovies = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/movie/popular')
            ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/genre/movie/list')
        ->json()['genres'];

        $topRatedMovies = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/movie/top_rated')
        ->json()['results'];

        $topRatedMovies = array_slice($topRatedMovies, 0, 5);
        $popularMovies = array_slice($popularMovies, 0, 5);
        $genres = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });




        $cachedTime = \Carbon\Carbon::now()->format("d-m-yy h:m:s");
        return view('index', [
            'popularMovies' => $popularMovies,
            'topRatedMovies' => $topRatedMovies,
            'genres' => $genres
        ]);
    }


    public function show($id) {

        $API_URI = 'https://api.themoviedb.org/3';

        $movie = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/movie/'.$id.'?append_to_response=credits,videos,recommendations')
            ->json();

        $genres = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/genre/movie/list')
        ->json()['genres'];

        $genres = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

       
        return view('show', [
            'movie' => $movie,
            'genres' => $genres
        ]);
    }
}
