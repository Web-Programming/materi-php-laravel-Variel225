<?php

use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\Types\Null_;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get("/berita/{id}/{title?}", function ($id, $title = NULL) {
    return view('berita', ['id' => $id, 'title' => $title]);
});

Route::get("/hasil/{jumlah}/{angka1}/{angka2}/{angka3?}", function ($angka1, $angka2, $angka3) {
    return view('hasil', ['jumlah' => $angka1 + $angka2 + $angka3, 'angka1' => $angka1, 'angka2' => $angka2, 'angka3' => $angka3]);
});