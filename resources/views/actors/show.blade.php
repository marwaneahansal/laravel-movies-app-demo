@extends('layouts.main')



@section('content')
    <div class="show-info relative">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            @if ($actor['profile_path'] != null)
                <img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$actor['profile_path'] }}" alt="{{ $actor['name'] }}" style="width: 24rem;">
            @else
                <img class="hover:opacity-75" src="/assets/no_image.png" alt="{{ $actor['name'] }}" style="width: 24rem;">
            @endif
            <div class="md:ml-24">
                <h2 class="text-3xl font-semibold">{{ $actor['name'] }}</h2>
                <div class="flex flex-col text-gray-400 text-sm mt-4">
                    @if ($actor['gender'] == "1")
                        <span>Gender: Female</span>
                    @else
                        <span>Gender: Male</span>
                    @endif
                    <span>Birthday: {{ \Carbon\Carbon::parse($actor['birthday'])->format('M d, Y') }}</span>
                    <span>Place of birth: {{ $actor['place_of_birth'] }}</span>
                    <span>known for: {{ $actor['known_for_department'] }}</span>
                    @if ($actor['deathday'] != null)
                        <span>Death day: {{ $actor['deathday'] }}</span>
                    @endif
                </div>



                <div class="mt-4">
                    <p>Biography:</p>
                    <p class="text-gray-300 pl-1">
                        {{ $actor['biography'] }}
                    </p>
                </div>

            
            </div>
        </div>
    </div>

    <div class="recommendation">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Movies:</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movies as $movie)
                    <x-movie-card :movie="$movie" :genres="$moviesGenres"/>
                @endforeach
            </div>
        </div>
    </div>

    <div class="recommendation">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Tv Shows:</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($tvShows as $tvShow)
                    <x-tvshow-card :tvShow="$tvShow" :genres="$tvShowsGenres"/>
                @endforeach
            </div>
        </div>
    </div>

    

    
@endsection