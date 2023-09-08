<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta per pagina HOME
Route::get('/', function () {
    return view('home');
})->name('home');

// Rotta per pagina CHARACTERS
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Rotta per pagina COMICS
Route::get('/comics', function () {
    // Mi importo l'array di array delle current series    
    $comics = config('comics');
    return view('comics', compact('comics'));
})->name('comics');






// Rotta per pagina SINGLE COMIC
Route::get('/single_comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];
    return view('single_comic', compact('comic'));
})->name('single_comic');


// Controllo se l'index è valido
if (!is_numeric($index) || $index < 0 || $index >= count($comics)) {
    abort(404);
}






// Rotta per pagina MOVIES
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Rotta per pagina TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Rotta per pagina GAMES
Route::get('/games', function () {
    return view('games');
})->name('games');

// Rotta per pagina COLLCECTIBLE
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Rotta per pagina VIDEOS
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Rotta per pagina FANS
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// Rotta per pagina NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');

// Rotta per pagina SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
