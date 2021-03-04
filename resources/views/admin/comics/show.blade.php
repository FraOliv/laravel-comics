@extends('layouts.dashboard')

@section('title')

Descrizione Comics
    
@endsection


@section('content')

<div class="container" class="d-flex">
    <div>Title: {{$comic->title}}</div>
    <div><img src="{{asset($comic->cover)}}" alt=""></div>
    <div>price: {{$comic->price}}</div>
    <div>Number of pages: {{$comic->number_page}}</div>
    <div>chapter: {{$comic->chapter}}</div>
    <div> rate: {{$comic->rate}} </div>


</div>

    
@endsection