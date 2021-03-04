@extends('layouts.app')

@section('title')
 Home
    
@endsection
@section('content')

<h1>Create</h1>
<form action="{{route('series.store')}}" method="post">
    @csrf
    @method('POST')
   

    <div class="form-group">
    
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required class="form-control"  aria-describedby="helpId" required>
    <small id="helpId" class="text-muted">Insert Title</small>
</div>
 
  
<button type="submit" class="btn btn-primary">
    Submit
</button>

</form>
@endsection