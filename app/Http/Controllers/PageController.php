<?php

namespace App\Http\Controllers;

use App\Movie;

class PageController extends Controller
{
    public function index() {
        /* $film_data = Movie::all(); */
        $film_data = Movie::all();
        return view('mov' , ['data' => $film_data]);
    }
}
