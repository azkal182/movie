<x-blog-layout>
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img class="w-96" src="{{ 'https://image.tmdb.org/t/p/w500/'.$detailsmovie['poster_path'] }}" alt="poster">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">{{ $detailsmovie['title'] }}</h2>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg class="fill-current text-orange-500 w-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                      </svg>
                    <span class="ml-1">{{ $detailsmovie['vote_average'] }}%</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($detailsmovie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($detailsmovie['genres'] as $genre)
                            {{ $genre['name'] }} @if (!$loop->last), @endif
                        @endforeach     
                    </span>
                </div>
                <p class="text-gray-300 mt-8">
                    {{ $detailsmovie['overview'] }}
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured cast</h4>
                    <div class="flex mt-4">
                        @foreach ($detailsmovie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{ $crew['name'] }}</div>
                                    <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                </div>
                            @endif
                                
                        @endforeach
                        
                    </div>
                </div>

                <div x-data="{ isOpen : false }">
                    @if ($detailsmovie['videos']['results'])
                        @if (count($detailsmovie['videos']['results'][0]) > 0)
                            <div class="mt-12">
                                <button @click="isOpen = true"  class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-700 transition ease-in-out duration-150">
                                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2">Play Trailer</span>
                                </button>
                            </div>
                        @endif
                    @endif

                    <div
                        style="background-color: rgba(0, 0, 0, .5);"
                        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                        x-show.transition.opacity="isOpen"
                    >
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button
                                        @click="isOpen = false"
                                        @click.away="isOpen = false"
                                        @keydown.escape.window="isOpen = false"
                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                        <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full" 
                                            src="https://www.youtube.com/embed/{{ $detailsmovie['videos']['results'][0]['key'] }}" 
                                            style="border: 0"
                                            allow="autoplay; encrypted-media"
                                            allowfullscreen
                                            frameborder="0">
                                        </iframe>
                                    </div>
                                    {{-- <img :src="image" alt="poster"> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    {{-- end movie info --}}
</x-blog-layout>