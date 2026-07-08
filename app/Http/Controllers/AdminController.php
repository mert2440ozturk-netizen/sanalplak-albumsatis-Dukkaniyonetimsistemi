<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $stats = [
            'artists' => Artist::count(),
            'albums' => Album::count(),
            'songs' => Song::count(),
            'genres' => Genre::count(),
            'users' => User::count(),
            'orders' => Order::count(),
        ];

        return view('admin.index', ['stats' => $stats]);
    }

}
