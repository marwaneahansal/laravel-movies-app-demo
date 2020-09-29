<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App | Find out about new, popular movies</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-gray-900 text-white font-sans overflow-x-hidden">
    <div class="navbar border-b border-gray-800">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <div class="brand-logo text-xl font-bold">
                <a href="{{ route('movies.index') }}">MyMovieApp</a>
            </div>
            <ul class="flex items-center">
                <li class="ml-6 hover:text-gray-300"><a href="{{ route('movies.index') }}">Movies</a></li>
                <li class="ml-6 hover:text-gray-300"><a href="#">TV Shows</a></li>
                <li class="ml-6 hover:text-gray-300"><a href="#">Actors</a></li>
                <li class="ml-6"> 
                    <div class="relative">
                        <input type="text" placeholder="Search" class="text-sm bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline">
                        <img src="/assets/icon-search.svg" alt="search icon" class="search_icon absolute w-6 ml-1">
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @yield('content')

    <script src="/js/app.js"></script>
</body>
</html>