@extends('layouts.main')



@section('content')
    <div class="movie-info">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="{{ $movie['title'] }}" style="width: 24rem;">
            <div class="md:ml-24">
                <h2 class="text-3xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-col text-gray-400 text-sm">
                    <div class="flex items-center">
                        <img src="/assets/star.svg" alt="rating star" class="w-3">
                    <span class="ml-1">{{ $movie['vote_average'] }}/10</span>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                            @if (!$loop->last)
                                {{ $genre['name'].', ' }}
                            @else
                                {{ $genre['name'].'.' }}
                            @endif
                        @endforeach
                    </span>
                </div>

                <div class="mt-8">
                    <a href="#" class="flex items-center hover:text-gray-300">
                        <img src="/assets/play.svg" alt="play" class="w-6 mr-2">
                        <p class="text-lg">Play Trailer</p>
                    </a>
                </div>

                <p class="text-gray-400 italic mt-8 text-lg">{{ $movie['tagline'] }}</p>

                <div class="mt-4">
                    <p>Overview:</p>
                    <p class="text-gray-300 pl-1">
                        {{ $movie['overview'] }}
                    </p>
                </div>


                <div class="mt-8">
                    <p class="text-gray-500">creator:</p>
                    <p class="pl-1">Name of the creator</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cast">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#"><div class="bg-orange-700 h-64"></div></a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Real Name</a>
                        <p class="text-gray-200 text-sm">Movie Character</p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection