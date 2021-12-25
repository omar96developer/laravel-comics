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
                        <p></p>
                    </div>
                </div>
                <div class="talent_b">
                    <div class="">
                        <h5>Written by:</h5>
                    </div>
                    <div class="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="specs_a">
                    <div class=""></div>
                    <div class=""></div>
                </div>
                <div class="specs_b">
                    <div class=""></div>
                    <div class=""></div>
                </div>
                <div class="specs_c">
                    <div class=""></div>
                    <div class=""></div>
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