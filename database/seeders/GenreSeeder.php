<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Rock']);
        Genre::create(['name' => 'Jazz']);
        Genre::create(['name' => 'Hip Hop']);
        Genre::create(['name' => 'Klasik']);
        Genre::create(['name' => 'Elektronik']);
    }
}
