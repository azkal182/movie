<?php

namespace App\Http\Livewire\Admin\Movie;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class AddMovie extends Component
{
    public $tmdb_id, $name, $description, $director, $actors, $trailer, $poster, $generated, $rating, $release_date, $duration;
    // protected $listeners = 'generated';
    public $row_player = [];
    public $row_download = [];
    public $total_player = 1;
    public $total_download = 1;
    public $detail = false;
    public function render()
    {
        return view('livewire.admin.movie.add-movie');
    }

    public function generate()
    {
        $id = $this->tmdb_id;
        $search = Http::withToken(config('services.tmdb.token'))
            ->get('https://api.themoviedb.org/3/movie/'.$id.'?append_to_response=credits,videos,images')
            ->json();
        // $credits = $search['credits']['crew'];
        // for ($i=0; $i < 3; $i++) { 
        //     // $credits = $search['credits']['crew'][$i++];
        //     $credits= $i++;
        //     return $credits;

        // }
        // foreach ($search['credits']['crew'] as $list) {
        //     if ($loop->index < 2) {
        //         dd($list['name']);
        //     }
        // }
        // dd($search['credits']['crew']);
        // $this->emit('generated');
        $this->name = $search['title'];
        $this->description = $search['overview'];
        $this->actors = $search['credits']['cast'];

        $this->actors = $search['credits']['cast'][0]['name'];
        $this->director = $search['credits']['crew'][0]['name'];
        $this->trailer = 'https://www.youtube.com/watch?v='.$search['videos']['results'][0]['key'];
        $this->duration = $search['runtime'];
        $this->poster = $search['poster_path'];
        $this->rating = $search['vote_average'];
        $this->release_date = Carbon::parse($search['release_date'])->format('M d, Y');
        
        $this->generated = 1;
        // dd($search);
    }

    public function add_player($i)
    {
        $i = $i + 1;
        $this->total_player = $i;
        array_push($this->row_player ,$i);
    }

    public function add_download($i)
    {

        $i = $i + 1;
        $this->total_download = $i;
        array_push($this->row_download ,$i);
    }
}
