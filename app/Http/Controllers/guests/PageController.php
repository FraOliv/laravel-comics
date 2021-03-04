<?php

namespace App\Http\Controllers\guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;

class PageController extends Controller
{
    public function homepage()
    {

        $comics = Comic::all();
        
        return view('guests.homepage', compact('comics'));
    }
}
