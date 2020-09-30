<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App | Find out about new, popular movies</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    @livewireStyles
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">
    <div class="navbar border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="brand-logo text-xl font-bold">
                <a href="{{ route('movies.index') }}">MyMovieApp</a>
            </div>
            <ul class="flex items-center">
                <li class="ml-6 hover:text-gray-300"><a href="{{ route('movies.index') }}">Movies</a></li>
                <li class="ml-6 hover:text-gray-300"><a href="{{ route('tvshows.index') }}">TV Shows</a></li>
                <li class="ml-6 hover:text-gray-300"><a href="{{ route('actors.index') }}">Actors</a></li>
                <li class="ml-6"> 
                    <livewire:search-dropdown>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')

    <script src="/js/app.js"></script>
    @livewireScripts
</body>
</html>