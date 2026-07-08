<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class AdminSongController extends Controller
{
    public function index()
    {
        $songs = Song::all();

        return view('admin.songs.index', ['songs' => $songs]);
    }

    public function show($id)
    {
        $song = Song::find($id);

        if($song == null){
            abort(404);
        }

        return view('admin.songs.show', ['song' => $song]);
    }

}
