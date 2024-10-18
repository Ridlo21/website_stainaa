<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

Route::get('/tentang', function () {
    return view('tentang.tentang');
});

Route::get('/pendidikan', function () {
    return view('pendidikan.pendidikan');
});

Route::get('/kemahasiswaan', function () {
    return view('kemahasiswaan.kemahasiswaan');
});

Route::get('/artikel', function () {
    return view('artikel.artikel');
});

Route::get('/akreditasi', function () {
    return view('akreditasi.akreditasi');
});

Route::get('/tentangSejarah', function () {
    return view('tentang.sejarah');
});
Route::get('/tentangVisiMisi', function () {
    return view('tentang.visimisi');
});
Route::get('/tentangLeaders', function () {
    return view('tentang.pimpinan');
});

Route::get('/berita_detail', function () {
    return view('berita.beritadetail');
});

Route::get('/pendidikanHens', function () {
    return view('pendidikan.hes');
});
Route::get('/pendidikanPai', function () {
    return view('pendidikan.pai');
});
