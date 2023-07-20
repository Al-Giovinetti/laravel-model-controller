<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller{
    public function home(){
        $movies = Movie::all();

        return view("Guest.home",compact("movies"));
    }
}
