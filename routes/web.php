<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

/*
 * The trailer has an address of its own so it can be shared. It is the
 * home page with the trailer already open, under a title and card
 * that unfurl as the game wherever the link gets pasted.
 */
Route::view('/grand-crank-auto', 'index', [
    'title' => 'Grand Crank Auto',
    'description' => 'A 1-bit, top-down open world, crank-powered crime sandbox. Coming soon to Playdate.',
    'trailer' => true,
])->name('trailer');
