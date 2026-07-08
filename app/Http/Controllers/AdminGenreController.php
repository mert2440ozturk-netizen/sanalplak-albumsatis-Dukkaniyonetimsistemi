<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class AdminGenreController extends Controller
{
    public function index(){
        $genres = Genre::all();

        return view('admin.genres.index', ['genres' => $genres]);
    }

    public function show($id) {

        $genre = Genre::find($id);

        if($genre == null){
            abort(404);
        }

        return view('admin.genres.show', ['genre' => $genre]);
    }
}
