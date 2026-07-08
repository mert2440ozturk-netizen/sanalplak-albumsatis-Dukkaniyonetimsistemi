<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        $artist = Artist::all();
        return view('artists.index', ['artists' => $artist]);
    }

    public function show($id)
    {
        $artist = Artist::find($id);

        if (!$artist) {
            abort(404);
        }

        return view('artists.show', ['artist' => $artist]);
    }

}
