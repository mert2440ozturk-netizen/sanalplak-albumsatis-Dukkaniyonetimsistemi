<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    public function run(): void
    {
        $artistNames = [
            'Led Zeppelin', 'Pink Floyd', 'The Rolling Stones', 'Queen', 'Nirvana',
            'AC/DC', 'Guns N\' Roses', 'The Beatles', 'Metallica', 'Radiohead',
            'Foo Fighters', 'Red Hot Chili Peppers',

            'Miles Davis', 'John Coltrane', 'Duke Ellington', 'Louis Armstrong', 'Charlie Parker',
            'Thelonious Monk', 'Ella Fitzgerald', 'Billie Holiday', 'Herbie Hancock', 'Dizzy Gillespie',
            'Chet Baker', 'Nina Simone',

            'Kendrick Lamar', 'Jay-Z', 'Nas', 'Eminem', 'Tupac Shakur',
            'The Notorious B.I.G.', 'OutKast', 'A Tribe Called Quest', 'Wu-Tang Clan', 'Kanye West',
            'Dr. Dre', 'Snoop Dogg',

            'Ludwig van Beethoven', 'Wolfgang Amadeus Mozart', 'Johann Sebastian Bach', 'Frédéric Chopin', 'Pyotr Ilyich Tchaikovsky',
            'Antonio Vivaldi', 'Franz Schubert', 'Johannes Brahms', 'Claude Debussy', 'Franz Liszt',
            'Joseph Haydn', 'Georg Friedrich Handel',

            'Daft Punk', 'Kraftwerk', 'The Chemical Brothers', 'Aphex Twin', 'Deadmau5',
            'Justice', 'Moby', 'Jean-Michel Jarre', 'Fatboy Slim', 'The Prodigy',
            'Boards of Canada', 'Röyksopp',
        ];

        foreach ($artistNames as $name) {
            Artist::factory()->create(['name' => $name]);
        }
    }
}
