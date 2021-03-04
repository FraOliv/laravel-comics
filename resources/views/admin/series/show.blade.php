@extends('layouts.app')

@section('title')

Descrizione series
    
@endsection


@section('content')

<div class="container" class="d-flex">
    <div>Title: {{$serie->title}}</div>
    <div><img src="{{asset($serie->cover)}}" alt=""></div>



</div>

    
@endsection