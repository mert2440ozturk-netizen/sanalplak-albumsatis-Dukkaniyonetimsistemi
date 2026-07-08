<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AdminAlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return view('admin.albums.index', ['albums' => $albums]);
    }

    public function show($id)
    {
        $album = Album::find($id);

        if(!$album == null){
            abort(404);
        }

        return view('admin.albums.show', ['album' => $album]);
    }
}
