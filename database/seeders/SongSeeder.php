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
            'Rock' => [
                'Midnight Static', 'Broken Skyline', 'Iron Horizon', 'Rust and Thunder', 'The Last Ember',
                'Concrete Storm', 'Wildfire Radio', 'Gasoline Hearts', 'Steel Reverie', 'Neon Wreckage',
                'Ashfall', 'Riot on Cedar Street', 'Static Bloodline', 'The Hollow Roar', 'Voltage & Bone',
            ],
            'Jazz' => [
                'Blue Velvet Hour', 'Smoke Rings', 'Amber Nightfall', 'Slow Burn Serenade', 'Midnight on 5th',
                'Brass and Rain', 'Quiet Downtown', 'Velvet Groove', 'Late Sonata', 'Whiskey and Reeds',
                'Sepia Waltz', 'The Long Exhale', 'Cobblestone Blues', 'After Hours Reverie', 'Moonlit Sax',
            ],
            'Hip Hop' => [
                'Concrete Kingdom', 'Sidewalk Chronicles', 'Golden Hour Hustle', 'Block Party Anthem', 'Static City',
                'Rhythm & Rise', 'Night Shift Grind', 'Corner Store Legend', 'Vinyl Dreams', 'Uptown Static',
                'Beat the Silence', 'City Lights Cipher', 'Backstreet Symphony', 'Rise from the Static', 'Concrete Poetry',
            ],
            'Klasik' => [
                'Prelude in Silver', 'Nocturne for the Lost', 'Adagio of Autumn', 'Sonata in Twilight', 'Whispers of the Strings',
                'Serenade for Rain', 'Movement in Silence', 'Cathedral Echoes', 'Fugue of Falling Leaves', 'Overture at Dawn',
                'Waltz of the Willows', 'Elegy for the Sea', 'Interlude in Grey', 'Symphony of Quiet Rooms', 'Requiem for Summer',
            ],
            'Elektronik' => [
                'Neon Pulse', 'Synthetic Horizon', 'Digital Bloom', 'Voltage Dreams', 'Glitch and Glow',
                'Circuit Rain', 'Midnight Frequencies', 'Chrome Heartbeat', 'Static Bloom', 'Pixel Skyline',
                'Analog Ghosts', 'Wireframe Sunset', 'Binary Tide', 'Neon Drift', 'Electric Hollow',
            ],
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
