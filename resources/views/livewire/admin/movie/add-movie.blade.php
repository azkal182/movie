<div class="flex text-sm px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="w-72 p-2">
        <div class="">
           <form wire:submit.prevent="generate">
               @csrf
                <x-label for="Name">TMDB ID</x-label>
               <x-input class="focus:outline-none focus:ring focus:border-blue-300 w-full mt-1 py-1 px-2" placeholder="TMDDB ID" wire:model="tmdb_id" autocomplete>name</x-input>
               <x-button class="w-full text-center mt-1">Generate</x-button>
           </form>
        </div>
        {{-- <div class="relative">
            <x-label>Name</x-label>
            <x-input placeholder="name" class="w-full"></x-input>
            <div>
                <ul>
                    <li class="px-3 py-3">azkal</li>
                    <li>arif</li>
                </ul>
            </div>
        </div> --}}
        <div class="poster" wire:mode="detail">
            @if ($poster)
                <div>
                    <img src="https://image.tmdb.org/t/p/w500/.{{ $poster }}" alt="">
                </div>
            @endif
            {{-- {{ $poster }} --}}
            @if ($generated)
            <div>
                <x-label>Genres</x-label>
                <x-input class="w-full"></x-input>
            </div>
            <div>
                <x-label>Duration</x-label>
                <x-input wire:model="duration" class="w-full"></x-input>
            </div>
            <div>
                <x-label>Quality</x-label>
                <x-input class="w-full"></x-input>
            </div>
            <div>
                <x-label>Rating</x-label>
                <x-input wire:model="rating" class="w-full"></x-input>
            </div>
            <div>
                <x-label>Release Date</x-label>
                <x-input wire:model="release_date" class="w-full"></x-input>
            </div>
            @endif
            
        </div>
    </div>
    <div class="w-full p-2">
        <form>
            @csrf
            <div>
                <x-label for="Name">Name</x-label>
                <x-input wire:model="name" class="w-full mt-1 py-1 px-2 focus:outline-none" type="text" name="name" id="name" placeholder="Movie name"></x-input>
            </div>
            <div class="mt-2">
                <x-label for="Name">Description</x-label>
                <textarea wire:model="description" class="border block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows='5' type="text" name="name" id="name" placeholder="description"></textarea>
            </div>
            <div class="mt-2">
                <x-label for="Name">Keywords</x-label>
                <x-input class="w-full mt-1 py-1 px-2 focus:outline-none" type="text" name="name" id="name" placeholder="keyword1, keyword2, keyword3 . . ."></x-input>
            </div>
            <div class="mt-2">
                <x-label for="Name">Actors</x-label>
                <x-input wire:model="actors" class="w-full mt-1 py-1 px-2 focus:outline-none" type="text" name="name" id="name" placeholder="Movie name">

                </x-input>
            </div>
            <div class="mt-2">
                <x-label for="Name">Directors</x-label>
                <x-input wire:model="director" class="w-full mt-1 py-1 px-2 focus:outline-none" type="text" name="name" id="name" placeholder="Movie name"></x-input>
            </div>
            <div class="mt-2">
                <x-label for="Name">Creators</x-label>
                <x-input class="w-full mt-1" type="text" name="name" id="name" placeholder="Movie name"></x-input>
            </div>
            <div class="mt-2">
                <x-label for="Name">Trailer</x-label>
                <x-input wire:model="trailer" class="w-full mt-1" type="text" name="name" id="name" placeholder="Movie name"></x-input>
            </div>
            <div class="mt-2">
                <div class="flex items-center">
                    <x-label>Players</x-label>
                    <button wire:click.prevent="add_player({{ $total_player }})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <x-input wire:model="player.name.0" class="w-44" type="text" name="name" id="name" placeholder="Player Name"></x-input>
                    <x-input wire:model="player.url.0" class="w-full" type="text" name="name" id="name" placeholder="Url"></x-input>
                </div>

                @foreach ($row_player as $item)
                <div class="flex items-center mt-2">
                    <x-input wire:model="player.name.{{ $item }}" class="w-44" type="text" name="name" id="name" placeholder="Player Name"></x-input>
                    <x-input wire:model="player.url.{{ $item }}" class="w-full" type="text" name="name" id="name" placeholder="Url"></x-input>
                </div>
                @endforeach
            </div>
            <div class="mt-2">
                <div class="flex items-center">
                    <x-label>Downloads</x-label>
                    <button wire:click.prevent="add_download({{ $total_download }})">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <x-input wire:model="download.name.0" class="w-44" type="text" name="name" id="name" placeholder="Player Name"></x-input>
                    <x-input wire:model="download.url.0" class="w-full" type="text" name="name" id="name" placeholder="Url"></x-input>

                </div>

                @foreach ($row_download as $value)
                <div class="flex items-center">
                    <x-input wire:model="download.name.{{ $value }}" class="w-44" type="text" name="name" id="name" placeholder="Player Name"></x-input>
                    <x-input wire:model="download.url.{{ $value }}" class="w-full" type="text" name="name" id="name" placeholder="Url"></x-input>

                </div>
                @endforeach
            </div>
        </form>
    </div>
</div>