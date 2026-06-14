<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hero;

Route::get('/', function () {
    $hero = Hero::first();

    return view('home', compact('hero'));
});