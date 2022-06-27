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
    'shop' => 'shop',
];

$data = [
    'headerMenu' => $headerNavList
];

$comics = [
    'comics' => config('comics')
];

Route::get('/', function () use ($data) {
    return view('home', $data);
})->name('home');

Route::get('/comics', function () use ($data, $comics) {
    $data = array_merge($data, $comics);
    return view('comics', $data);
})->name('comics');

Route::get('/comics/{id}', function ($id) use ($data) {
    $comic = collect(config('comics'));
    $current_comic = $comic->where('id', $id)->first();

    if (!$current_comic) {
        return abort(404);
    }

    $data = array_merge($data, [
        'comic' => $current_comic
    ]);
    return view('single-comic', $data);
})->name('single-comic');

Route::get('/characters', function () use ($data) {
    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () use ($data) {
    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () use ($data) {
    return view('tv', $data);
})->name('tv');

Route::get('/collectibles', function () use ($data) {
    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () use ($data) {
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () use ($data) {
    return view('fans', $data);
})->name('fans');

Route::get('/news', function () use ($data) {
    return view('news', $data);
})->name('news');

Route::get('/shop', function () use ($data) {
    return view('shop', $data);
})->name('shop');