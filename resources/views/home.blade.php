@extends('layouts.default')

@section('title', 'DC COMICS')
    


@section('main')

    <section class="main_section1">
            
        <div class="container_section1">
            <div class="serie">CURRENT SERIES</div>

            @foreach ($comic as $item)
            <a href="{{route('series', ['id' => $loop->index])}}" class="product_card" >
                <img src={{$item['thumb']}} alt="#">
                <h4>{{$item['series']}}</h4>
            </a>
            
            @endforeach     
        </div>
        <div class="load">
            <a href="#">LOAD MORE</a>
        </div>
    </section>

    <section class="main_section2">
        <div class="container_section2">
             <ul class="list_items">
                 
                 @foreach ($data as $item)
                 <li class="list_item">
                     <img src="{{asset($item['img'])}}" alt="#">                  
                     <a href="#">{{ $item['title'] }}</a>
                 </li>
                 @endforeach
               
            </ul>
        </div>
    </section>
@endsection