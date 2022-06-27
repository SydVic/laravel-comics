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

$headerNavList = [
    'characters' => 'characters',
    'comics' => 'comics',
    'movies' => 'movies',
    'tv' => 'tv',
    'collectibles' => 'collectibles',
    'videos' => 'videos',
    'fans' => 'fans',
    'news' => 'news',
    'shop' => 'characters',
];

Route::get('/', function () use ($headerNavList) {
    $data = [
        'headerMenu' => $headerNavList
    ];
    return view('home', $data);
});

Route::get('/comics', function () use ($headerNavList) {
    $data = [
        'headerMenu' => $headerNavList
    ];
    return view('comics', $data);
});
