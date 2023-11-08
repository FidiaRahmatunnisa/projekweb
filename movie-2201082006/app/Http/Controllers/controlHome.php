<?php

namespace App\Http\Controllers;

use index;
use Illuminate\Http\Request;
use App\Models\Movie;

class controlHome extends Controller
{
    public function index(){
        // $movies = $this->movieData;
        $movies = Movie::all();
        return view('/index', compact('movies'));
    }

    public function detail($id){
    //     $movie = $this->movieData;
    //     $movie = [];
    //     foreach($movie as $m){
    //         if($m['id'] == $id){
    //             $movie = $m;
    //         }
    //     }

        $movie = Movie::find($id);
        return view('detail',compact('movie'));
    }
}
