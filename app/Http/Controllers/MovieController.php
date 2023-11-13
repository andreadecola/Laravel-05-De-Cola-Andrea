<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('movies',["films"=>$movies]);
    }

    public function create(){
        return view('movie.create');
    }


    public function store(Request $request){
        $movie= new Movie();
        $movie->title = $request->title;
        $movie->year = $request->year;
        $movie->description = $request->description;
        
        $movie->save();

        return redirect()->route('create.movie');
    }
}
