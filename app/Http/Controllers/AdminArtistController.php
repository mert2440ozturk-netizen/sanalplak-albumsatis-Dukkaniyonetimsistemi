<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class AdminArtistController extends Controller
{
    public function index(){
        $artists = Artist::all();

        return view('admin.artists.index', ['artists' => $artists]);
    }

    public function show($id)
    {
        $artists = Artist::find($id);

        if(!$artists){
            abort(404);
        }

        return view('admin.artists.show', ['artists' => $artists]);
    }
}
