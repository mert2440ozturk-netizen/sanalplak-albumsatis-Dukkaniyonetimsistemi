<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');

        $songs = Song::when($query, fn ($q) => $q->where('name', 'like', '%' . $query . '%'))->get();

        return view('songs.index', ['songs' => $songs, 'query' => $query]);
    }

}
