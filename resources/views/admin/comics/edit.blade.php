@extends('layouts.dashboard')
@section('title')
Edit
    
@endsection
@section('content')



 <h1>Edit: " {{$comic->title}} "</h1>
   <form action="{{route('comics.store')}}" method="post"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')

        {{-- title --}}
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{$comic->title}}">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- price --}}
        <div class="form-group">
            <label for="price">price</label>
            <input class="form-control" type="text" name="price" id="price" value="{{$comic->price}}">
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        

    
        <div class="form-group">
            <label for="number_page">number_page</label>
            <textarea class="form-control" name="number_page" id="number_page" rows="3">{{$comic->number_page}}</textarea>
        </div>
        @error('number_page')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      
        <div class="form-group">
            <label for="chapter">chapter</label>
            <input class="form-control" type="text" name="chapter" id="chapter" value="{{$comic->chapter}}">
        </div>
        @error('chapter')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
                <div class="form-group">
            <label for="rate">Reading time</label>
           {{--  <input class="form-control" type="text" name="rate" id="rate" value="{{$comic->rate}}"> --}}
            <input type="number" name="rate" id="rate" class="form-control" value="{{$comic->rate}}">
        </div>
        @error('rate')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
    <label for="cover">Cover</label>
    <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image" aria-describedby="fileHelpId" value="{{ $comic->cover }}" required>
    <small id="fileHelpId" class="form-text text-muted">Add a cover image for the current Novel</small>
    </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection