<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portofolio.index');
});


Route::get('/work', function () {
    return view('portofolio.work');
});

Route::get('/about', function () {
    return view('portofolio.about');
});

Route::get('/work-detail', function () {
    return view('portofolio.work-detail');
});

Route::get('/contact', function () {
    return view('portofolio.contact');
});



// Tambahkan route lainnya sesuai kebutuhan
