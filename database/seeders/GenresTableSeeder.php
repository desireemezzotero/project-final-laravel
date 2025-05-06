<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'title_genre' => 'Animazione',
                'description_genre' => 'Film realizzati con tecniche animate, spesso destinati a un pubblico di tutte le età.'
            ],
            [
                'title_genre' => 'Avventura',
                'description_genre' => 'Racconti emozionanti di esplorazioni, missioni e sfide in ambientazioni straordinarie.'
            ],
            [
                'title_genre' => 'Fantasy',
                'description_genre' => 'Storie ambientate in mondi immaginari con magia, creature fantastiche e incantesimi.'
            ],
            [
                'title_genre' => 'Famiglia',
                'description_genre' => 'Contenuti pensati per essere apprezzati da grandi e piccoli insieme, con temi universali.'
            ],
            [
                'title_genre' => 'Musical',
                'description_genre' => 'Film in cui i personaggi esprimono emozioni e narrativa attraverso il canto e la musica.'
            ],
            [
                'title_genre' => 'Commedia',
                'description_genre' => 'Film leggeri e divertenti, con situazioni comiche e personaggi buffi o goffi.'
            ],
            [
                'title_genre' => 'Drammatico',
                'description_genre' => 'Trame emotive che trattano temi di crescita, perdita o momenti toccanti della vita.'
            ],
            [
                'title_genre' => 'Romantico',
                'description_genre' => 'Storie d’amore fiabesche, spesso con lieto fine e ambientazioni incantate.'
            ],
            [
                'title_genre' => 'Storico',
                'description_genre' => 'Film ispirati a contesti del passato, rivisitati con uno stile adatto ai bambini.'
            ],
            [
                'title_genre' => 'Fiaba',
                'description_genre' => 'Adattamenti di racconti classici, con morale, personaggi archetipici e magia.'
            ]
        ];

        foreach ($genres as $genre) {
            $newGenre = new Genre();

            $newGenre->title_genre = $genre['title_genre'];
            $newGenre->description_genre = $genre['description_genre'];

            $newGenre->save();
        };
    }
}
