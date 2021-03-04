@extends('layouts.app')

@section('content')
 <div class="carousel">
      <h2>COMICS & GRAPHIC NOVELS</h2>

      <div class="comic_cards">
            @forelse ($comics  as $value)
                  <div class="comic_card">
                     <a href="{{route('comics.show', ['comic'=>$value->id])}}"> 
                              <img src="{{asset($value->cover)}}" alt="" >
                        </a>
                        <h4>{{ $value->title }}</h4>
                        
                  </div>
                      @empty
    <tr>
        <td>no comics in here</td>
    </tr>

            @endforelse
      </div>
          

@endsection