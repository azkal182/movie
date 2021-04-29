{{-- <div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img class="hover:opacity-75 transition ease-in-out duration-150" src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="deadpool">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
        <div class="flex items-center text-gray-400">
            <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <span class="ml-1">{{ $movie['vote_average'] }}%</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach ($movie['genre_ids'] as $genre)
                {{ $genres->get($genre) }} @if (!$loop->last), @endif
            @endforeach
        </div>
    </div>
</div> --}}

<div class="mt-4">
    <div class="relative hover:opacity-80 transition ease-in-out duration-150">
        <a href="{{ route('movies.show', $movie['id']) }}">
            <img class="" src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="deadpool">
        <div class="absolute top-0 bg-gray-500 px-2 flex items-center rounded">
            <svg class="fill-current text-yellow-300 w-3" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
            <span class="text-xs">{{ $movie['vote_average'] }}</span>
            <svg class="ml-1 w-3 text-yellow-300" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-xs">N/A</span>
        </div>
        <div class="absolute top-0 right-0 px-2 bg-blue-600 text-xs rounded-sm">
            HD
        </div>
        <div class="absolute pt-5 bottom-0 w-full py-3 bg-gradient-to-b from-transparent to-black text-sm font-semibold text-center">{{ $movie['title'] }}</div>
        
        </a>
        {{-- <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-sm mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400">
                <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                </svg>
                <span class="ml-1 text-xs">{{ $movie['vote_average'] }}%</span>
                <span class="mx-2 text-xs">|</span>
                <span class="text-xs">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            </div>
            <div class="text-gray-400 text-sm">
                @foreach ($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }} @if (!$loop->last), @endif
                @endforeach
            </div>
        </div> --}}
    </div>
</div>