<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songTitlesByGenre = [
            'Rock' => ['Stairway to Heaven', 'Bohemian Rhapsody', 'Hotel California', 'Smoke on the Water', 'Sweet Child O Mine', 'Comfortably Numb', 'Highway to Hell', 'Livin on a Prayer', 'Enter Sandman', 'Paranoid', 'Free Bird', 'Born to Run', 'Sweet Home Alabama', 'Purple Haze', 'Dream On'],
            'Jazz' => ['So What', 'Take Five', 'My Favorite Things', 'Round Midnight', 'Autumn Leaves', 'Summertime', 'Blue in Green', 'A Night in Tunisia', 'Georgia on My Mind', 'Body and Soul', 'All Blues', 'Mack the Knife', 'Fly Me to the Moon', 'Cantaloupe Island', 'St. Thomas'],
            'Hip Hop' => ['Juicy', 'N.Y. State of Mind', 'Lose Yourself', 'Hypnotize', 'California Love', 'Sicko Mode', 'HUMBLE', 'Alright', 'Ms. Jackson', 'Empire State of Mind', 'In Da Club', 'Raptures Delight', 'C.R.E.A.M.', 'Gin and Juice', '99 Problems'],
            'Klasik' => ['Für Elise', 'Ode to Joy', 'Canon in D', 'Clair de Lune', 'The Blue Danube', 'Ave Maria', 'Air on the G String', 'Nessun Dorma', 'Toccata and Fugue in D Minor', 'Prelude in C Major', 'Hungarian Dance No. 5', 'Morning Mood', 'In the Hall of the Mountain King', 'Adagio for Strings', 'Rondo Alla Turca'],
            'Elektronik' => ['One More Time', 'Around the World', 'Sandstorm', 'Windowlicker', 'Strobe', 'Ghosts n Stuff', 'Levels', 'Genesis', 'D.A.N.C.E', 'Da Funk', 'Papua New Guinea', 'Xtal', 'Firestarter', 'Block Rockin Beats', 'Music Sounds Better With You'],
        ];

        $genres = Genre::all();

        foreach ($genres as $genre) {
            $titles = $songTitlesByGenre[$genre->name] ?? [];

            if (empty($titles)) {
                continue;
            }

            $albums = $genre->albums;

            foreach ($albums as $album) {
                Song::factory()
                    ->count(rand(3, 6))
                    ->create([
                        'album_id' => $album->id,
                        'name' => fn () => $titles[array_rand($titles)],
                    ]);
            }
        }
    }
}
