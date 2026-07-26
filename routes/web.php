<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('comics/0', function () {
    return view('detail-0');
})->name('0');

Route::get('comics/1', function () {
    return view('detail-1');
})->name('1');

Route::get('comics/2', function () {
    return view('detail-2');
})->name('2');
