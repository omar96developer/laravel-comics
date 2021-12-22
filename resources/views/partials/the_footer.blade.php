@php
    $dccomic = [
            'li1' => 'Characters',
            'li2' => 'Comics',
            'li3' => 'Movies',
            'li4' => 'TV',
            'li5' => 'Games',
            'li6' => 'Videos',
            'li7' => 'News'
];

    $shop = [
        'li1' => 'Shop DC',
        'li2' => 'Shop DC Collectables'
];

    $dc = [
        'li1' => 'Terms Of Use',
        'li2' => 'Privacy policy (New)',
        'li3' => 'Ad Choices',
        'li4' => 'Advertsing',
        'li5' => 'Jobs',
        'li6' => 'Subscriptions',
        'li7' => 'Talent Workshops',
        'li8' => 'CPRSC Certificates',
        'li9' => 'Rating',
        'li10' => 'Shop Help',
        'li11' => 'Contact Us'
];

    $sites = [
        'li1' => 'DC',
        'li2' => 'MAD Magazine',
        'li3' => 'DC Kids',
        'li4' => 'DC Universe',
        'li5' => 'DC Power Visa'
    ]
@endphp



<div class="footer_container_1">
    <div class="footer_container_A">
        <section class="footer1">

            <div class="footer1_list">
                <div class="list">

                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($dccomic as $item)
                            <li>{{$item}}</li>
                        @endforeach                               
                    </ul>

                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($shop as $item)
                            <li>{{$item}}</li>
                        @endforeach                                                      
                    </ul>
                </div>
                <div class="list">
                    <h3>DC</h3>
                    <ul>
                        @foreach ($dc as $item)
                            <li>{{$item}}</li>
                        @endforeach                                                      
                    </ul>
                </div>
                <div class="list">
                    <h3>SITES</h3>
                    <ul>
                        @foreach ($sites as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            
        </section>
    </div>
</div>
<div class="footer_container_2">
    <div class="footer_container_B">
        <section class="footer2">
            <div class="signup">
                <a href="#">
                    SIGN-UP NOW!
                </a>
            </div>
            <div class="follow">
                <h3>FOLLOW US</h3>
                <img src="{{asset('img/footer-facebook.png')}}" alt="facebook">
                <img src="{{asset('img/footer-twitter.png')}}" alt="twitter">
                <img src="{{asset('img/footer-youtube.png')}}" alt="youtube">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="pintrest">
                <img src="{{asset('img/footer-periscope.png')}}" alt="periscope">
            </div>
        </section>
    </div>
</div>