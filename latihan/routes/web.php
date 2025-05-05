<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\MhsApiController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ProdiFakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/berita/{id}/{title?}', function ($id,$title = NULL) {
    return view('berita', ['id' => $id, 'title' => $title]);
});

Route::get('hasil/{jumlah}/{angka1}/{angka2}/{angka3}', function ($angka1,$angka2,$angka3) {
    return view('hasil', ['jumlah' => $angka1 + $angka2 + $angka3, 'angka1' => $angka1, 'angka2' => $angka2, 'angka3' => $angka3]);
});

Route::get('fakultas', function () {
    // return view('fakultas.index', ['ilkom' => 'Fakultas Ilmu Komputer dan Rekayasa']);
     // return view('fakultas.index', ['fakultas' => 'Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ilmu Ekonomi']);
      // return view('fakultas.index') -> with['fakultas' => 'Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ilmu Ekonomi']);

      $kampus = 'Universitas Multi Data Palembang';
      // fakultas = [];
      $fakultas = ['Fakultas Ilmu Komputer dan Rekayasa', 'Fakultas Ilmu Ekonomi'];
      return view('fakultas.index', compact('fakultas', 'kampus'));
});

Route::get('/materi/index', action: [MateriController::class, 'index']);

Route::get('/materi/detail/{id}', action: [MateriController::class, 'detail']);

Route::resource('prodi', ProdiController::class);

Route::apiResource('api/mhs', MhsApiController::class);