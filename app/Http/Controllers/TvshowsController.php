<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class TvshowsController extends Controller
{
    public function index() {

        $API_URI = 'https://api.themoviedb.org/3';
        
        

        $popularTvShows = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/tv/popular')
            ->json()['results'];

        $topRatedTvShows = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/tv/top_rated')
        ->json()['results'];

        $genres = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/genre/tv/list')
        ->json()['genres'];


        $popularTvShows = collect($popularTvShows)->take(5);
        $topRatedTvShows = collect($topRatedTvShows)->take(5);
        $genres = collect($genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        dump($popularTvShows);

        return view('tvshows.index', [
            "popularTvShows" => $popularTvShows,
            "topRatedTvShows" => $topRatedTvShows,
            "genres" => $genres
        ]);
    }



    public function shwo($id) {
        return view('tvshows.show');
    }
}
