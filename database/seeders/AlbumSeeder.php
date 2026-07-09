<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    public function run(): void
    {
        $artistsByGenre = [
            'Rock' => ['Led Zeppelin', 'Pink Floyd', 'The Rolling Stones', 'Queen', 'Nirvana', 'AC/DC', 'Guns N\' Roses', 'The Beatles', 'Metallica', 'Radiohead', 'Foo Fighters', 'Red Hot Chili Peppers'],
            'Jazz' => ['Miles Davis', 'John Coltrane', 'Duke Ellington', 'Louis Armstrong', 'Charlie Parker', 'Thelonious Monk', 'Ella Fitzgerald', 'Billie Holiday', 'Herbie Hancock', 'Dizzy Gillespie', 'Chet Baker', 'Nina Simone'],
            'Hip Hop' => ['Kendrick Lamar', 'Jay-Z', 'Nas', 'Eminem', 'Tupac Shakur', 'The Notorious B.I.G.', 'OutKast', 'A Tribe Called Quest', 'Wu-Tang Clan', 'Kanye West', 'Dr. Dre', 'Snoop Dogg'],
            'Klasik' => ['Ludwig van Beethoven', 'Wolfgang Amadeus Mozart', 'Johann Sebastian Bach', 'Frédéric Chopin', 'Pyotr Ilyich Tchaikovsky', 'Antonio Vivaldi', 'Franz Schubert', 'Johannes Brahms', 'Claude Debussy', 'Franz Liszt', 'Joseph Haydn', 'Georg Friedrich Handel'],
            'Elektronik' => ['Daft Punk', 'Kraftwerk', 'The Chemical Brothers', 'Aphex Twin', 'Deadmau5', 'Justice', 'Moby', 'Jean-Michel Jarre', 'Fatboy Slim', 'The Prodigy', 'Boards of Canada', 'Röyksopp'],
        ];

        $albumTitlesByGenre = [
            'Rock' => ['Led Zeppelin IV', 'The Dark Side of the Moon', 'Sticky Fingers', 'A Night at the Opera', 'Nevermind', 'Back in Black', 'Appetite for Destruction', 'Abbey Road', 'Master of Puppets', 'OK Computer', 'Wasting Light', 'Californication'],
            'Jazz' => ['Kind of Blue', 'A Love Supreme', 'Ellington at Newport', 'Plays W.C. Handy', 'Bird and Diz', 'Brilliant Corners', 'Ella and Louis', 'Lady in Satin', 'Head Hunters', 'Groovin High', 'Chet Baker Sings', 'Little Girl Blue'],
            'Hip Hop' => ['Illmatic', 'The Blueprint', 'Good Kid M.A.A.D City', 'The Chronic', 'Ready to Die', 'Aquemini', 'The Low End Theory', 'Enter the Wu-Tang', 'My Beautiful Dark Twisted Fantasy', 'The Marshall Mathers LP', 'To Pimp a Butterfly', 'Doggystyle'],
            'Klasik' => ['Symphony No. 5', 'The Four Seasons', 'Moonlight Sonata Collection', 'Requiem in D Minor', 'The Well-Tempered Clavier', 'Symphony No. 9 Choral', 'Nocturnes', 'Swan Lake', 'Brandenburg Concertos', 'Hungarian Rhapsodies', 'The Planets', 'Messiah'],
            'Elektronik' => ['Discovery', 'Homework', 'Selected Ambient Works 85-92', 'Music Has the Right to Children', 'Random Access Memories', 'Play', 'Cross', 'Oxygène', 'You\'ve Come a Long Way Baby', 'The Fat of the Land', 'Random Album Title', 'Melody A.M.'],
        ];

        $genres = Genre::all();

        foreach ($genres as $genre) {
            $artistNames = $artistsByGenre[$genre->name] ?? [];
            $albumTitles = $albumTitlesByGenre[$genre->name] ?? [];

            if (empty($artistNames) || empty($albumTitles)) {
                continue;
            }

            $genreArtists = Artist::whereIn('name', $artistNames)->pluck('id');

            Album::factory()
                ->count(10)
                ->create([
                    'artist_id' => fn () => $genreArtists->random(),
                    'genre_id' => $genre->id,
                    'name' => fn () => $albumTitles[array_rand($albumTitles)],
                ]);
        }
    }
}
