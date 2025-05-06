<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = [
            [
                'title_film' =>  'Biancaneve e i sette nani',
                'plot' => 'Biancaneve è una giovane e bella principessa che vive in un castello con suo padre il re il quale, una volta rimasto vedovo, decise di risposarsi con Grimilde; alla morte del marito, divenne ossessionata dalla sua bellezza e invidiosa della figliastra che obbligò a lavorare come sguattera del castello.',
                'image' => 'img/bianca.png',
                'duration' => '83',
                'year' => '1937'
            ],
            [
                'title_film' => 'Pinocchio',
                'plot' => 'Racconta le esperienze tragicomiche di Pinocchio, una marionetta animata fabbricata e considerata come un figlio dal falegname Geppetto, che grazie all\'aiuto della Fata dai capelli turchini riesce a maturare moralmente finché diventa un bambino vero.',
                'image' => 'img/pinocchio.png',
                'duration' => '88',
                'year' => '1940'
            ],
            [
                'title_film' => 'Dumbo',
                'plot' =>  'Racconta la storia di un piccolo elefante che, a causa delle sue enormi orecchie, viene deriso dagli altri animali del circo. Dopo essere stato separato dalla madre, Dumbo incontra un topolino che gli insegna a volare grazie alle sue orecchie, diventando così un\'attrazione straordinaria.',
                'image' => 'img/dumbo.jpg',
                'duration' => '64',
                'year' => '1941'
            ],
            [
                'title_film' => 'Bambi',
                'plot' => 'narra la storia di un giovane cerbiatto, Bambi, dalla nascita fino alla maturità, sottolineando il suo percorso di crescita, le avventure in foresta, la perdita della madre e la scoperta dell\'amore.',
                'image' => 'img/bambi.png',
                'duration' => '70',
                'year' => '1942'
            ],
            [
                'title_film' => 'Le avventure di Peter Pan',
                'plot' => 'Peter Pan è un bambino che non vuole crescere e vive sull\'Isola che non c\'è, insieme ad un gruppo di bambini, chiamati Bimbi Sperduti. Sull\'isola vive molte avventure, ma spesso si reca nel mondo reale per incontrare altri bambini, come Wendy ed i suoi fratelli, che decide di portare sull\'isola.',
                'image' => 'img/peter.png',
                'duration' => '77',
                'year' => '1953'
            ],
            [
                'title_film' => 'Lilli e il Vagabondo',
                'plot' => 'racconta la storia d\'amore tra una cocker spaniel di nome Lilli, una cagnolina viziata e coccolata dai suoi padroni, e Biagio, un cane meticcio randagio e avventuroso. Quando Lilli si sente trascurata a causa della nascita di un bambino, decide di fuggire di casa, dove incontra Biagio e insieme vivono diverse avventure. L\'amore tra i due cani li porterà a superare le difficoltà e a trovare la loro felicità, dimostrando che l\'amore non ha barriere. ',
                'image' => 'img/lili.jpeg',
                'duration' => '76',
                'year' => '1955'
            ]
        ];

        foreach ($films as $film) {
            $newFilm = new Film();

            $newFilm->title_film = $film['title_film'];
            $newFilm->plot = $film['plot'];
            $newFilm->image = $film['image'];
            $newFilm->duration = $film['duration'];
            $newFilm->year = $film['year'];

            $newFilm->save();
        }
    }
}
