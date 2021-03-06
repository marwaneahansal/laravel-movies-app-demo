<div class="relative" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input wire:model.debounce.600ms="search" type="text" placeholder="Search" class="text-sm bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" @focus="isOpen = true" >
    <img src="/assets/icon-search.svg" alt="search icon" class="search_icon absolute w-6 ml-1">

    <div wire:loading class="spinner right-0 mr-4"></div>
    <div class="z-50 absolute bg-gray-800 rounded w-64 px-4 mt-2" x-show="isOpen">
        <div class="text-sm">
            @if($searchResults->count() > 0)
                @foreach ($searchResults as $result)
                    <div class="border-b border-gray-700">
                        @if ($result['media_type'] == "movie")
                            <a href="{{ route('movies.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'] != "")
                                    <img  class="w-12" src="{{ 'https://image.tmdb.org/t/p/w92/'.$result['poster_path'] }}" alt="{{ $result['title'] }}">
                                @else
                                    <img  class="w-12" src="/assets/no_image.png" alt="{{ $result['title'] }}">
                                @endif
                                <p class="ml-4">{{ $result['title'] }}</p>
                            </a>
                        @else
                            <a href="{{ route('tvshows.show', $result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                                @if ($result['poster_path'] != "")
                                    <img  class="w-12" src="{{ 'https://image.tmdb.org/t/p/w92/'.$result['poster_path'] }}" alt="{{ $result['name'] }}">
                                @else
                                    <img  class="w-12" src="/assets/no_image.png" alt="{{ $result['name'] }}">
                                @endif
                                <p class="ml-4">{{ $result['name'] }}</p>
                            </a>                       
                        @endif
                        
                    </div>  
                @endforeach
            @elseif(strlen($search) > 2)
            <div>
                <p class="px-3 py-3">No result</p>
            </div>
            @endif
            
        </div>
    </div>
</div>
