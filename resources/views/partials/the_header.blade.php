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



<nav>
    <div class="nav_container">
        <div class="nav_logo">
            <img src="{{asset('img/dc-logo.png')}}" alt="dc-logo">
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
    </div>
</nav>