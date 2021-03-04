@extends('layouts.app')

@section('title')
comics 
    
@endsection
@section('content')

<a href="{{route('comics.create')}}" class="btn btn-dark">
    Create a new Post
</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Cover</th>
            <th>Price</th>
            <th>Number_page</th>
            <th>Chapter</th>
            <th>Rate</th>

            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($comics as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td><img src="{{asset($value->cover)}}" alt=""></td>
        <td>{{$value->price}}</td>
        <td>{{$value->number_page}}</td>
        <td>{{$value->chapter}}</td>
        <td>{{$value->rate}}</td>

        
   
    
           <td><a href="{{route('comics.show', ['comic'=>$value->id])}}">View</a>
            <a href="{{route('comics.edit', $value->id )}}">Edit</a>
            <form action="{{route('comics.destroy', $value->id )}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"> Delete</button>
    </tr>

            </form>
    @empty
    <tr>
        <td>no comics in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection