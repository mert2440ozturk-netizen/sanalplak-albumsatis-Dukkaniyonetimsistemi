<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->randomElement([
                'Velvet Horizon', 'The Hollow Wires', 'Nadir', 'Vela North', 'Ashen Fields',
                'Crimson Static', 'The Paper Cranes', 'Solstice Drive', 'Echo Valley', 'The Amber Room',
                'Wild Iris', 'Midnight Parade', 'Glass Horizon', 'The Quiet Machine', 'Osman Kaya Trio',
                'Deniz & the Waves', 'Yıldız Kolektif', 'Kara Kutu', 'Anadolu Işıkları', 'Gece Treni',
                'The Velvet Static', 'Iron Willow', 'Copper Skyline', 'The Faded Maps', 'Northbound Echoes',
                'Sable & Stone', 'The Wandering Kites', 'Violet Circuit', 'Ember & Ash', 'The Silver Foxes',
                'Tundra Bloom', 'Lowlight Society', 'The Rust Belt Choir', 'Marble Sky', 'Driftwood Radio',
                'The Neon Orchard', 'Cobalt Sparrow', 'Static & Sage', 'The Paper Moons', 'Coral Drift',
                'Hollow Pines', 'The Wired Saints', 'Feral Harmony', 'Velvet Static Union', 'The Quiet Static Club',
                'Amber Tongue', 'The Iron Larks', 'Northern Hollow', 'Salt & Cedar', 'The Wandering Ember',
                'Kismet Radio', 'Paper Wolves', 'The Gray Static', 'Ivory Static', 'The Hidden Frequencies',
                'Rusted Halo', 'The Broken Compass', 'Wild Copper', 'The Faded Static', 'Onur & the Echoes',
                'Selin Yıldız', 'Ela Demir', 'The Anatolian Static', 'Deniz Ateş', 'Kuzey Rüzgarı',
            ]),

            'country' => $this->faker->country(),
            'description' => $this->faker->text(),
        ];
    }
}
