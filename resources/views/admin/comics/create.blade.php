@extends('layouts.app')

@section('title')
 Home
    
@endsection
@section('content')

<h1>Create</h1>
<form action="{{route('comics.store')}}" method="post">
    @csrf
    @method('POST')
   

    <div class="form-group">
    
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>
  <div class="form-group">
    <label for="price">price</label>
    <textarea class="form-control" name="price" id="price" rows="3" required></textarea>
    <small class="text-muted">Inserisci ilprezzo del fumetto</small>
  </div>

  

    <div class="form-group">
    <label for="number_page">number_page</label>
    <textarea class="form-control" name="number_page" id="number_page" rows="3" required></textarea>
    <small class="text-muted">Inserisci il number_page del post</small>
  </div>
    <div class="form-group">
    <label for="chapter">chapter number</label>
    <textarea class="form-control" name="chapter" id="chapter" rows="3" required></textarea>
    <small class="text-muted">Inserisci il chapter del post</small>
  </div>


  <div class="form-group">
    <label for="rate">rate</label>
    <textarea class="form-control" name="rate" id="rate" rows="3" required></textarea>
    <small class="text-muted">Inserisci il rate del fumetto</small>
  </div>
  
<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection