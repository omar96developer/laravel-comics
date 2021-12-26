@extends('layouts/default')

@section('main')
<div class="series_1">
    <div class="series_1_a">
        <div class="figure">
            <img src="{{$serie['thumb']}}" alt="">
            <div class="figure_a">{{$serie['type']}}</div>
            <div class="figure_b">VIEW GALLERY</div>
        </div>
    </div>   
</div>
<div class="series_2">
    <div class="series_2_a">
        <div class="description">
            <h1>{{$serie['title']}}</h1>
            <div class="status">
                <div class="status_a">
                    <div class="status_a_1">
                        <p>U.S. Price: <span>{{$serie['price']}}</span></p>
                    </div>
                    <div class="status_a_2">
                        <p>AVAILABLE</p>
                    </div>
                </div>
                <div class="status_b">
                    <p>Check Availability</p>
                </div>
            </div>
            <p class="desc">{{$serie['description']}}</p>
        </div>
        <div class="adv">
            <h4>ADVERTISMENT</h4>
            {{-- img non funziona cambiata con logo --}}
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
    </div>
    
</div>
<div class="series_3">
    <div class="series_3_1">
        <div class="series_3_a">
            <div class="talent">
                <h2>Talent</h2>
                <div class="talent_a">
                    <div class="">
                        <h5>Art by:</h5>
                    </div>
                    <div class="">
                        @foreach ($serie['artists'] as $item)
                            <a href="#">{{$item}}</a>
                        @endforeach
                    </div>
                </div>
                <div class="talent_b">
                    <div class="">
                        <h5>Written by:</h5>
                    </div>
                    <div class="">
                        @foreach ($serie['writers'] as $item)
                            <a href="#">{{$item}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="specs_a">
                    <div class="">
                        <h5>Series:</h5>
                    </div>
                    <div class="">
                        <a href="#">{{$serie['series']}}</a>
                    </div>
                </div>
                <div class="specs_b">
                    <div class="">
                        <h5>U.S. Price:</h5>
                    </div>
                    <div class="">
                        <p>{{$serie['price']}}</p>
                    </div>
                </div>
                <div class="specs_c">
                    <div class="">
                        <h5>On Sale Date:</h5>
                    </div>
                    <div class="">
                        @php
                            $originalDate = $serie['sale_date'];
                            $newDate = date("M d Y", strtotime($originalDate));
                        @endphp
                        <p>{{$newDate}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="series_3_b">
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
        </div>
    </div>
   
    
</div>
    
@endsection