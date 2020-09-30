<div class="mt-8">
    @if ($movie['poster_path'] != "")
        <a href="{{ route('movies.show', $movie['id']) }}"><img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="{{ $movie['title'] }}"></a>
    @else
        <a href="{{ route('movies.show', $movie['id']) }}"><img class="hover:opacity-75" src="/assets/no_image.png" alt="{{ $movie['title'] }}"></a>
    @endif
    
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="mt-2 text-lg hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400 text-sm">
            <img src="/assets/star.svg" alt="rating star" class="w-3">
            <span class="ml-1">{{ $movie['vote_average'] }}/10</span>
            <span class="mx-1">-</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                @if (!$loop->last)
                    {{ $genres->get($genre).', ' }}
                @else
                    {{ $genres->get($genre).'.' }}
                @endif
            @endforeach
        </div>
    </div>
</div>