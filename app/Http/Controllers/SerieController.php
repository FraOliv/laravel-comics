<?php

namespace App\Http\Controllers;

use App\Serie;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){

        $series = Serie::all();
        return view('guests.comics.homepage', compact('series'));
     

    }
}
