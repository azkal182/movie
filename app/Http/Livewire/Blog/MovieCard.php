<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class MovieCard extends Component
{
    // public $id, $image, $genre, $rating, $release;
    public $movie, $genres;
    public function render()
    {
        return view('livewire.blog.movie-card');
    }

    public function mount($movie, $genres)
    {
        $this->movie = $movie;
        $this->genres = $genres;
    }
}
