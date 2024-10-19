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
Route::get('/artikel_detail', function () {
    return view('artikel.artikeldetail');
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

Route::get('/list_berita', function () {
    return view('berita.listberita');
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

Route::get('/list_pengumuman', function () {
    return view('pengumuman.listpengumuman');
});

Route::get('/pengumuman_detail', function () {
    return view('pengumuman.pengumumandetail');
});

Route::get('/list_agenda', function () {
    return view('agenda.listagenda');
});

Route::get('/agenda_detail', function () {
    return view('agenda.agendadetail');
});
