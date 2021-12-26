@php
$navbarItems = [
                [
                    'title' => 'CHARACTERS'
                ],
                [
                    'title' => 'COMICS'
                ],
                [
                    'title' => 'MOVIES'
                ],
                [
                    'title' => 'TV'
                ],
                [
                    'title' => 'GAMES'
                ],
                [
                    'title' => 'COLLECTIONS'
                ],
                [
                    'title' => 'VIDEOS'
                ],
                [
                    'title' => 'FANS'
                ],
                [
                    'title' => 'NEWS'
                ],
                [
                    'title' => 'SHOP'
                ]
                
            ]
@endphp


<div class="blue_header">
    <div class="blue_container">
        <div class="blue_a">
            <p>DC POWER VISA</p>
        </div>
        <div class="blue_b">
            <p>ADDITIONAL DC SITES</p>
        </div>
    </div>
</div>
<nav>
    <div class="nav_container">
        <div class="nav_logo">
            <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="dc-logo"></a>
            
        </div>
        <div class="nav_items">
            <ul class="nav_items_list">
                @foreach ($navbarItems as $item)
                <li class="nav_item"> 
                    <a href="#">{{$item['title']}}</a>
                </li>
                @endforeach               
            </ul>
        </div>
        <div class="nav_search">
            <input class="nav_search_input" type="search" placeholder="Search">
        </div>
    </div>
</nav>