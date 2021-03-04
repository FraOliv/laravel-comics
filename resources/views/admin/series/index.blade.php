@extends('layouts.app')

@section('title')
Series 
    
@endsection
@section('content')

<a href="{{route('series.create')}}" class="btn btn-dark">
    Create a new Series
</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Cover</th>
            <th>Actions</th>
        </tr>



    </thead>




<tbody>
    @forelse ($series as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->title}}</td>
        <td><img src="{{asset($value->cover)}}" alt=""></td>
        <td><a href="{{route('series.show', $value->id )}}">View</a>
            <a href="{{route('series.edit', $value->id )}}">Edit</a>
        <form action="{{route('series.destroy', $value->id )}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"> Delete</button>
    </tr>

            </form>
    @empty
    <tr>
        <td>no series in here</td>
    </tr>
    @endforelse
</tbody>
</table>
    
@endsection