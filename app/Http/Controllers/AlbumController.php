<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('albums.index', ['albums' => $albums]);
    }

    public function show($id){
        $album = Album::find($id);

        if (!$album) {
            abort(404);
        }

        return view('albums.show', ['album' => $album]);
    }

}
