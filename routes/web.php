<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'nama' => 'Diva',
        'matkul' => ['HTML', 'CSS', 'Laravel'],
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hello/{nama}', function ($nama) {
    return view('home', [
        'nama' => $nama,
        'matkul' => ['HTML', 'CSS', 'Laravel'],
    ]);
});