<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    public function myOrders()
    {
        $user = User::find(1);
        $orders = $user->orders;

        $totalOrders = $orders->count();
        $totalAlbums = 0;
        $totalSpent = 0;

        foreach ($orders as $order) {
            foreach ($order->orderItems as $item) {
                $totalAlbums += $item->unit_piece;
                $totalSpent += $item->unit_piece * $item->unit_price;
            }
        }

        return view('profile.orders', [
            'orders' => $orders,
            'totalOrders' => $totalOrders,
            'totalAlbums' => $totalAlbums,
            'totalSpent' => $totalSpent,
        ]);
    }

}
