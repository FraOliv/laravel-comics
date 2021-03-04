@extends('layouts.app')
@section('title')
Edit
    
@endsection
@section('content')



 <h1>Edit: " {{$serie->title}} "</h1>
    <form action="{{route('series.update', ['serie'=>$serie->id])}}" method="post">
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$serie->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    
        

    
        


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection