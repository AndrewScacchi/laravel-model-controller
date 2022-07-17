<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        // return view('home');
    //This static methods allow you to get all data in db
    $movies = \App\Movie::all();
    return view('home', compact('movies'));
    }



    // public function movieList(){
    //     //This static methods allow you to get all data in db
    // $movies = \App\Movie::all();
    //     return view('movieList', compact('movies'));
    // }
}
