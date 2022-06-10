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
    $headerLinks = config('headerlinks');
    $comics = config('comic');
    $socials = config('social');
    $merchandise = config('merchandise');
    $cards = config('maingrid');
    // dump($comics);
    // dump($headerLinks);
    // dump($socials);
    // dump($merchandise);
    // dump($cards);
    return view('home', ['comics' => $comics, 'headerLinks' => $headerLinks, 'socials' => $socials, 'merch' => $merchandise, 'cards' => $cards]);
});
