<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\Movie;



class MovieController extends Controller
{
    public function index(){
        
        //SELECT * FROM 'movies'
             $movies = Movie::all();
          
         return view('pages.movie.index', compact('movies'));
     }

     public function show($id){
        //SELECT 'id' FROM 'movie'
            $movie = Movie::findOrFail($id); // oppure uso  $book = Book::find($id);

         return view('pages.movie.show', compact('movie'));
     }
}
