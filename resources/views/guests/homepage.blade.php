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
</div>
 <div class="must_read container_local">
      <h2 class="mr_title">MUST READS</h2>
      <div class="must_item">
            <img src="{{ asset("img/mustread_batman.jpg") }}" alt="" srcset="">
            <h4>GET THE INSIDE TRACK ON ALL THINGS DC</h4>
            <h2>DC CONNECT</h2>
            <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p>
      </div>
      <div class="must_item">
            <img src="{{ asset("img/mustread_sandman.jpg") }}" alt="" srcset="">
            <h4>FROM THE MIND OF NEIL GAIMAN</h4>
            <h2>THE SANDMAN UNIVERSE</h2>
            <p>Four new series set in the world of the Vertigo classic.</p>
      </div>
      <div class="must_item">
            <img src="{{ asset("img/mustread_wonder.jpg") }}" alt="">
            <h4>THESE KIDS ARE ALL FIGHT!</h4>
            <h2>WONDER COMICS</h2>
            <p>Brian Michael Bendis shines the spotlight on DC’s youngest heroes!</p>
      </div>
</div>





<div class="current_series ">
      <h2>CURRENT SERIES</h2>

      <div class="cs_items container_local">
            @foreach ($series as $item)
             <div class="cs_item">
                  <img src="{{ asset($item->cover) }}" alt="">
                  <h5>{{ $item->title }}</h5>
            </div>
            @endforeach
                  <div class="cs_item">
                  <img src="{{ asset("img/notfound.jpg") }}" alt="">
                  <h5>BATMAN: URBAN LEGENDS</h5>
            </div>
           
            <div class="cs_item">
                  <img src="{{ asset("img/cs_batmanbw.jpg") }}" alt="">
                  <h5>BATMAN BLACK & WHITE</h5>
            </div>
        
            <div class="cs_item">
                  <img src="{{ asset("img/notfound.jpg") }}" alt="">
                  <h5>BATMAN: URBAN LEGENDS</h5>
            </div>
           
            <div class="cs_item">
                  <img src="{{ asset("img/cs_catwoman.jpg") }}" alt="">
                  <h5>CATWOMAN</h5>
            </div>
       
            <div class="cs_item">
                  <img src="{{ asset("img/cs_connect.jpg") }}" alt="">
                  <h5>DC CONNECT</h5>
            </div>
            <div class="cs_item">
                  <img src="{{ asset("img/cs_dclove.jpg") }}" alt="">
                  <h5>DC LOVE IS A BATTLEFIELD</h5>
            </div>
            <div class="cs_item">
                  <img src="{{ asset("img/cs_far.jpg") }}" alt="">
                  <h5>FAR SECTOR</h5>
            </div>
      </div>

</div>




          

@endsection