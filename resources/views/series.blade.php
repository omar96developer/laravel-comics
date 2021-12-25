@extends('layouts/default')

@section('main')
<div class="series_1">
    <div class="series_1_a">
        <div class="figure">
            <img src="{{$serie['thumb']}}" alt="">
            <div class="figure_a">COMIC BOOK</div>
            <div class="figure_b">VIEW GALLERY</div>
        </div>
    </div>   
</div>
<div class="series_2">
    <div class="series_2_a">
        <div class="description">
            <h1>{{$serie['title']}}</h1>
            <div class="status"></div>
            <p>{{$serie['description']}}</p>
        </div>
        <div class="adv">
            <h3>ADVERTISMENT</h3>
            <img src="{{asset('img/adv.png')}}" alt="">
        </div>
    </div>
    
</div>
<div class="series_3">
    <div class="series_3_a">
        <div class="talent">
            <h2>Talent</h2>
            <div class="talent_a">
                <div class=""></div>
                <div class=""></div>
            </div>
            <div class="talent_b">
                <div class=""></div>
                <div class=""></div>
            </div>
        </div>
        <div class="specs">
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
    
@endsection