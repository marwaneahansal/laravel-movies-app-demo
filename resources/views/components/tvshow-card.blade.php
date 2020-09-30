<div class="mt-8">
    <a href="{{ route('tvshows.show', $tvShow['id']) }}"><img class="hover:opacity-75" src="{{ 'https://image.tmdb.org/t/p/w500/'.$tvShow['poster_path'] }}" alt="{{ $tvShow['name'] }}"></a>
    <div class="mt-2">
        <a href="{{ route('tvshows.show', $tvShow['id']) }}" class="mt-2 text-lg hover:text-gray-300">{{ $tvShow['name'] }}</a>
        <div class="flex items-center text-gray-400 text-sm">
            <img src="/assets/star.svg" alt="rating star" class="w-3">
            <span class="ml-1">{{ $tvShow['vote_average'] }}/10</span>
            <span class="mx-1">-</span>
            <span>{{ \Carbon\Carbon::parse($tvShow['first_air_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($tvShow['genre_ids'] as $genre)
                @if (!$loop->last)
                    {{ $genres->get($genre).', ' }}
                @else
                    {{ $genres->get($genre).'.' }}
                @endif
            @endforeach
        </div>
    </div>
</div>