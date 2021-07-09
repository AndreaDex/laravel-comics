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
    return view('home');
})->name('home');

Route::get('/characters', function () {


    return view('characters');
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    //var_dump($comics);

    return view('comics.index', compact('comics'));
})->name('comics');

Route::get('comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];

    return view('comics.show', compact('comic'));
})->name('comic');

Route::get('/movie', function () {
    return view('movie');
})->name('movie');
