<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comics = config("comics");
    $datas = [
        [
            'img' => 'img/buy-comics-digital-comics.png',
            'title' => 'DIGITAL COMICS',  
        ],
        [
            'img' => 'img/buy-comics-merchandise.png',
            'title' => 'DC MERCHANDISE',
        ],
        [
            'img' => 'img/buy-comics-subscriptions.png',
            'title' => 'SUBSCRIPTION',
        ],
        [
            'img' => 'img/buy-comics-shop-locator.png',
            'title' => 'COMIC SHOP LOCATOR', 
        ],
        [
            'img' => 'img/buy-dc-power-visa.svg',
            'title' => 'DC POWER VISA', 
        ]
        ];

    return view('home',["data" => $datas], ["comic" => $comics]);
})->name('home');


Route::get('series/{id}',function($id) {
    $comics = config("comics");
    $series = $comics[$id];
    return view('series',["serie" => $series]);
})->name('series');