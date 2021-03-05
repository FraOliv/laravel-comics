<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;
use App\Serie;

class PageController extends Controller
{
    public function homepage()
    {

        $comics = Comic::all();
        $series = Serie::all();
        
        return view('guests.homepage', compact('comics', 'series'));
    }
}
