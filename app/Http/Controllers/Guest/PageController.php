<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Movie;
use App\Models\Poster;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('home',compact('movies'));

    }
}
