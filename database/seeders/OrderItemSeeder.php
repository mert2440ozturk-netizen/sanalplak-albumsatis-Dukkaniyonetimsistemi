<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albumIds = Album::pluck('id');
        $orders = Order::all();

        foreach($orders as $order) {
            OrderItem::factory()
                ->count(rand(1,3))
                ->create([
                    'order_id' => $order->id,
                    'album_id' => fn () => $albumIds->random(),
                ]);
        }
    }
}
