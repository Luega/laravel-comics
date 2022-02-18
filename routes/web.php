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
    $data = ['comics' => config('comics'), 'namePage' => 'home'];
    return view('guest.home', $data);
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);

    $comicAlone = '';
    foreach ($comic as $value) {
        $comicAlone = $value;
    }

    return view('guest.comic', [
        'comic' => $comicAlone,
        'namePage' => $comicAlone['title'],
    ]);
})->name('comic');

Route::get('/characters', function () {
    $data = ['namePage' => 'characters'];
    return view('guest.characters', $data);
})->name('characters');

Route::get('/comics', function () {
    $data = ['namePage' => 'comics'];
    return view('guest.comics', $data);
})->name('comics');

Route::get('/movies', function () {
    $data = ['namePage' => 'movies'];
    return view('guest.movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $data = ['namePage' => 'tv'];
    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function () {
    $data = ['namePage' => 'games'];
    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $data = ['namePage' => 'collectibles'];
    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $data = ['namePage' => 'videos'];
    return view('guest.videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $data = ['namePage' => 'fans'];
    return view('guest.fans', $data);
})->name('fans');

Route::get('/news', function () {
    $data = ['namePage' => 'news'];
    return view('guest.news', $data);
})->name('news');

Route::get('/shop', function () {
    $data = ['namePage' => 'shop'];
    return view('guest.shop', $data);
})->name('shop');
