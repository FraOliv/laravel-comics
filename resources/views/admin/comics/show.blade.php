@extends('layouts.app')

@section('title')

Descrizione Post
    
@endsection


@section('main_content')

<div class="container" class="d-flex">
    <div>Title: {{$comic->title}}</div>
    <div>price: {{$comic->price}}</div>
    <div>Number of pages: {{$comic->number_page}}</div>
    <div>chapter: {{$comic->chapter}}</div>
    <div> rate: {{$comic->rate}} </div>


</div>

    
@endsection