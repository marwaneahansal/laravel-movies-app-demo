@extends('layouts.main')



@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular_movies">
            <h2 class="uppercase text-orange-600 text-xl font-bold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
               @foreach ($popularMovies as $popularMovie)
                    <x-movie-card :movie="$popularMovie" :genres="$genres"/>
               @endforeach
            </div>
        </div>

        <div class="popular_movies py-24">
            <h2 class="uppercase text-orange-600 text-xl font-bold">Top Rated Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($topRatedMovies as $topRatedMovie)
                    <x-movie-card :movie="$topRatedMovie" :genres="$genres"/>
                @endforeach
                
            </div>
        </div>
    </div>
@endsection