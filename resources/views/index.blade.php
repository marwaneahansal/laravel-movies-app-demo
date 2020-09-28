@extends('layouts.main')



@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular_movies">
            <h2 class="uppercase text-orange-600 text-xl font-bold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#"><div class="bg-orange-700 h-64"></div></a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Test</a>
                        <div class="flex items-center text-gray-400 text-sm">
                            <img src="/assets/star.svg" alt="rating star" class="w-3">
                            <span class="ml-1">9/10</span>
                            <span class="mx-1">-</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="popular_movies pt-24">
            <h2 class="uppercase text-orange-600 text-xl font-bold">New Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="#"><div class="bg-orange-700 h-64"></div></a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray-300">Test</a>
                        <div class="flex items-center text-gray-400 text-sm">
                            <img src="/assets/star.svg" alt="rating star" class="w-3">
                            <span class="ml-1">9/10</span>
                            <span class="mx-1">-</span>
                            <span>Feb 20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action, Thriller, Comedy.
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection