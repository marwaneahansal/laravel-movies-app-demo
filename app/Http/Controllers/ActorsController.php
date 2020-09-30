<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ActorsController extends Controller
{
    public function index() {

        $API_URI = 'https://api.themoviedb.org/3';
        
        

        $popularActors = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/person/popular')
            ->json()['results'];

        dump($popularActors);
        return view('actors.index', [
            "popularActors" => $popularActors
        ]);
    }



    public function show($id) {
        $API_URI = 'https://api.themoviedb.org/3';

        $actor = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/person/'.$id.'?append_to_response=movie_credits,tv_credits')
            ->json();


        $moviesGenres = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/genre/movie/list')
        ->json()['genres'];

        $moviesGenres = collect($moviesGenres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        $tvShowsGenres = Http::withToken(config('services.tmdb.token'))
        ->get($API_URI.'/genre/tv/list')
        ->json()['genres'];

        $tvShowsGenres = collect($tvShowsGenres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });


        $movies = collect($actor['movie_credits']['cast'])->take(5);
        $tvShows = collect($actor['tv_credits']['cast'])->take(5);

        

        // dump($actor);
        return view('actors.show', [
            "actor" => $actor,
            "moviesGenres" => $moviesGenres,
            "tvShowsGenres" => $tvShowsGenres,
            "movies" => $movies,
            "tvShows" => $tvShows,
        ]);
    }
}
