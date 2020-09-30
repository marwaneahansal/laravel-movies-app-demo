@extends('layouts.main')



@section('content')
    <div class="show-info relative">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$show['poster_path'] }}" alt="{{ $show['name'] }}" style="width: 24rem;">
            <div class="md:ml-24">
                <h2 class="text-3xl font-semibold">{{ $show['name'] }}</h2>
                <div class="flex flex-col text-gray-400 text-sm">
                    <div class="flex items-center">
                        <img src="/assets/star.svg" alt="rating star" class="w-3">
                    <span class="ml-1">{{ $show['vote_average'] }}/10</span>
                    </div>
                    <span>{{ \Carbon\Carbon::parse($show['first_air_date'])->format('M d, Y') }}</span>
                    <span>
                        @foreach ($show['genres'] as $genre)
                            @if (!$loop->last)
                                {{ $genre['name'].', ' }}
                            @else
                                {{ $genre['name'].'.' }}
                            @endif
                        @endforeach
                    </span>
                </div>

                <div class="mt-8 ">
                    <button  class="playTrailer flex items-center hover:text-gray-300 cursor-pointer focus:outline-none focus:shadow">
                        <img src="/assets/play.svg" alt="play" class="w-6 mr-2">
                        <p class="text-lg">Play Trailer</p>
                    </button>
                    <div class="trailer fixed h-screen w-screen top-0 left-0 flex bg-black bg-opacity-75 hidden">
                        <div class="close text-white text-4xl absolute px-10 py-4 cursor-pointer right-0">X</div>
                        @if (count($show['videos']['results']) > 0)
                            <iframe width="60%" height="70%" src="https://www.youtube.com/embed/{{ $show['videos']['results'][0]['key'] }}?enablejsapi=1" class="self-center mx-auto" id="ytbPlayer">
                            </iframe>
                        @else
                            <p class="text-4xl text-white">Sorry! Trailer was removed</p>
                        @endif
                        
                    </div>
                </div>


                <div class="mt-4">
                    <p>Overview:</p>
                    <p class="text-gray-300 pl-1">
                        {{ $show['overview'] }}
                    </p>
                </div>


                <div class="mt-8">
                    <p class="text-gray-500">Spoken Languages:</p>
                    @foreach ($show['languages'] as $language)
                        <p class="pl-1">{{ $language }}.</p>
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Seasons:</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 mt-2">
            @foreach ($show['seasons'] as $season)
                @if ($season['season_number'] > 0)
                    <div>
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$season['poster_path'] }}" alt="{{ $season['name'] }}">
                        <div class="flex flex-col ">
                            <a href="" class="mt-2 text-lg hover:text-gray-300">{{ $season['name'] }}</a>
                            <span class="text-gray-400 text-sm">{{ \Carbon\Carbon::parse($season['air_date'])->format('M d, Y') }}</span>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    {{-- <div class="cast">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast:</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="#"><img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="{{ $cast['name']}}"></a>
                            <div class="mt-2">
                                <a href="#" class="mt-2 text-lg hover:text-gray-300">{{ $cast['name']}}</a>
                                <p class="text-gray-200 text-sm">{{ $cast['character']}}</p>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="recommendation">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Other Recommandation:</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['recommendations']['results'] as $movie)
                    <x-movie-card :movie="$movie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div> --}}
@endsection