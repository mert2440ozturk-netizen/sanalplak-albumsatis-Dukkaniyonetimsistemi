<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'album_id' => Album::factory(),
            'order_id' => Order::factory(),
            'unit_piece' => $this->faker->numberBetween(1, 5),
            'unit_price' => $this->faker->randomFloat(2,50,500),
        ];
    }
}
