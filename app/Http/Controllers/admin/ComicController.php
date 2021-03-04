<?php

namespace App\Http\Controllers\admin;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        //dd($comics);
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cover = Storage::disk('public')->put('cover-img', $request->cover);
        $newComic = new Comic;
        $newComic->title = $request->title;
        $newComic->price = $request->price;
        $newComic->number_page = $request->number_page;
        $newComic->chapter = $request->chapter;
        $newComic->rate = $request->rate;
        $newComic->cover = $cover;
        
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($comic)
    {
        $comic = Comic::find($comic);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $comic)
    {
        $comic = Comic::find($comic);

        $comic->title = $request->title;
        $comic->price = $request->price;
        $comic->number_page = $request->number_page;
        $comic->chapter = $request->chapter;
        $comic->rate = $request->rate;
        $comic->cover = 'cover';
        $comic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($comic)
    {
        $comic = Comic::find($comic);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
