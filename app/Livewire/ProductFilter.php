<?php

namespace App\Livewire;

use App\Models\Film;
use App\Models\Genre;
use Livewire\Component;

class ProductFilter extends Component
{
    public $genre = '';


    public function updatedGenre($value)
    {
        $this->genre = $value;
        logger("Genre updated to: " . $value);
    }

    public function render()
    {

        $genres = Genre::all();


        $films = Film::when($this->genre, function ($query) {
            if ($this->genre) {
                $query->whereHas('genres', function ($q) {
                    $q->where('genres.id', $this->genre);
                });
            }
        })->get();

        // Rende la vista con i film e i generi
        return view('livewire.product-filter', compact('films', 'genres'));
    }
}
