<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredAlbums = Album::inRandomOrder()->take(6)->get();
        $genres = Genre::all();

        return view('home', [
            'featuredAlbums' => $featuredAlbums,
            'genres' => $genres,
        ]);
    }
}
