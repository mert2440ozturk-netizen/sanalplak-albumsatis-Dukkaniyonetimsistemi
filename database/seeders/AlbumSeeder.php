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
        $albumTitlesByGenre = [
            'Rock' => [
                'Concrete Reverie', 'Ashfall Sessions', 'Steel Horizon', 'Rust Belt Diaries', 'Voltage Parade',
                'The Hollow Sessions', 'Wildfire Chronicles', 'Iron Bloom', 'Static Kingdom', 'Gasoline Symphony',
                'Neon Ruins', 'The Last Riot', 'Copper & Thunder', 'Ember Sessions', 'Broken Radio',
            ],
            'Jazz' => [
                'Blue Hour Sessions', 'Velvet Downtown', 'Smoke & Brass', 'Late Night Reverie', 'Sepia Sessions',
                'The Slow Exhale', 'Amber Groove', 'Cobblestone Nights', 'Whiskey Sessions', 'Moonlit Downtown',
                'The Long Waltz', 'After Hours Sessions', 'Velvet Reeds', 'Quiet Brass', 'Midnight Sonata',
            ],
            'Hip Hop' => [
                'Concrete Chronicles', 'Sidewalk Sessions', 'Golden Hour Cipher', 'Block Party Sessions', 'Uptown Chronicles',
                'Vinyl Kingdom', 'City Lights Sessions', 'Corner Store Chronicles', 'Static Cipher', 'Backstreet Sessions',
                'Rhythm Kingdom', 'Concrete Symphony', 'Night Shift Sessions', 'Rise Sessions', 'Beat Chronicles',
            ],
            'Klasik' => [
                'Preludes for Autumn', 'Nocturne Sessions', 'Adagio Chronicles', 'Sonatas in Grey', 'Cathedral Sessions',
                'Serenades for Rain', 'Waltz Chronicles', 'Elegy Sessions', 'Fugue Chronicles', 'Overture Sessions',
                'Movements in Silence', 'Requiem Sessions', 'Interludes for Strings', 'Symphony of Rooms', 'Whispered Sonatas',
            ],
            'Elektronik' => [
                'Neon Sessions', 'Synthetic Bloom', 'Digital Horizon', 'Voltage Sessions', 'Circuit Chronicles',
                'Chrome Sessions', 'Pixel Chronicles', 'Analog Sessions', 'Wireframe Chronicles', 'Binary Sessions',
                'Static Pulse', 'Neon Chronicles', 'Electric Sessions', 'Glitch Chronicles', 'Drift Sessions',
            ],
        ];

        $artistIds = Artist::pluck('id');
        $genres = Genre::all();

        foreach ($genres as $genre) {
            $titles = $albumTitlesByGenre[$genre->name] ?? [];

            if (empty($titles)) {
                continue;
            }

            Album::factory()
                ->count(10)
                ->create([
                    'artist_id' => fn () => $artistIds->random(),
                    'genre_id' => $genre->id,
                    'name' => fn () => $titles[array_rand($titles)],
                ]);
        }
    }
}
