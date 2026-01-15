<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
 $info='testo';

    return view('home', compact('info'));
})->name('home');
Route::get('/about-us', function () {
    $info='testo';
    return view('about-us',compact('info'));
})->name('about-us');
