<?php

namespace App\Http\Controllers\admin;

use App\Serie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Serie::all();
        //dd($series);
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $newserie = new Serie;
        $newserie->title = $request->title;

        $newserie->save();
        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($serie)
    {
        $serie = Serie::find($serie);
        return view('admin.series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($serie)
    {
        $serie = Serie::find($serie);
        return view('admin.series.edit', compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $serie)
    {
        $serie = serie::find($serie);

        $newserie = new Serie;
        $newserie->title = $request->title;
        $serie->cover = 'cover';
        $serie->save();
        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($serie)
    {
        $serie = serie::find($serie);
        $serie->delete();
        return redirect()->route('series.index');
    }
}
