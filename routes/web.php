<?php

use Illuminate\Support\Facades\Route;

// Halaman UI Showcase
Route::get('/', function () {
    return view('showcase.index');
});

// Halaman pengujian Master Layout
Route::get('/layout-test', function () {
    return view('showcase.layout-test');
});