<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            UserSeeder::class,
            ArtistSeeder::class,
            GenreSeeder::class,
            AlbumSeeder::class,
            SongSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
