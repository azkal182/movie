<div class="relative mt-3 md:mt-0" x-data="{ isOpen : true }" @click.away="isOpen = false">
    <input
        wire:model.debounce.500ms="search"
        type="text"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search (Press '/' to focus)"
        x-ref="search"
        @keydown.window="
            if (event.keyCode === 191) {
                event.preventDefault();
                $refs.search.focus();
            }
        "
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
    >
    <div class="absolute top-0">
        <svg class="w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"> </div>
    @if (strlen($search) > 2)
        <div 
            class="absolute bg-gray-800 w-64 text-sm rounded mt-2" 
            x-show.transition.opacity="isOpen">
            @if (count($searchresult) > 0 )
                <ul>
                    @foreach ($searchresult as $list)
                        <li class="border-b border-gray-700">
                            <a href="{{ route('movies.show', $list['id']) }}" class="hover:bg-gray-700 px-3 py-3 flex items-center"
                            @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                                @if ($list['poster_path'])
                                    <img class="w-8" src="{{ 'https://image.tmdb.org/t/p/w92/'.$list['poster_path'] }}" alt="poster">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                                @endif
                                <span>{{ $list['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No result for "{{ $search }}</div>
            @endif
        </div>
    @endif
</div>