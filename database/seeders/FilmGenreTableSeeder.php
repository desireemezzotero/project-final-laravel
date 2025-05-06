<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmGenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = Genre::all();
        $films = Film::all();

        foreach ($films as $film) {

            $film->genres()->attach(
                $genres->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
