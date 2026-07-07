<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist_id' => Artist::factory(),
            'genre_id' => Genre::factory(),

            'name' => $this->faker->words(3,true),
            'release_year' => $this->faker->numberBetween(1970,2026),
            'stock' => $this->faker->numberBetween(0,100),
            'price' => $this->faker->randomFloat(2,50,500),
        ];
    }
}
