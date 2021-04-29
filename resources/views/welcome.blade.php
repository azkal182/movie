<x-blog-layout>
    <div class="container mx-auto px-4 py-16 pt-0">
        @if ( auth()->user()['email_verified_at'] == null)
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            @if (session('status') == 'verification-link-sent')
            <div class="flex items-center justify-between px-4 py-3 mb-8 text-sm font-semibold bg-gray-500 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif
            
            @if (session('status') != 'verification-link-sent')
                <div class="flex items-center justify-between px-4 py-3 mb-8 text-sm font-semibold bg-gray-500 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span>Please verify your email</span>
                    </div>
                    <button>click to resend verify →</button>
                </div>
            @endif
            
        </form>
        @endif



        

        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
                @foreach ($popularMovie as $movie)
                    <livewire:blog.movie-card :movie="$movie" :genres="$genres"></livewire:blog.movie-card>
                    
                @endforeach
                
            </div>
        </div>

        {{-- end popular movie --}}

        <div class="now-playing mt-16">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
                @foreach ($nowplaying as $movie)
                    <livewire:blog.movie-card :movie="$movie" :genres="$genres"></livewire:blog.movie-card>
                @endforeach
                
            </div>
        </div>
    </div>
</x-blog-layout>
