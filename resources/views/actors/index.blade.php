@extends('layouts.main')



@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="popular_movies">
        <h2 class="uppercase text-orange-600 text-xl font-bold">Popular Actors:</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
           @foreach ($popularActors as $popularActor)
                <div class="mt-8">
                    <a href="{{ route('actors.show', $popularActor['id']) }}"><img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$popularActor['profile_path'] }}" alt="{{ $popularActor['name'] }}"></a>
                    <div class="mt-2">
                        <a href="{{ route('actors.show', $popularActor['id']) }}" class="mt-2 text-lg hover:text-gray-300">{{ $popularActor['name'] }}</a>
                    </div>
                </div>
           @endforeach
        </div>
    </div>
</div>
@endsection