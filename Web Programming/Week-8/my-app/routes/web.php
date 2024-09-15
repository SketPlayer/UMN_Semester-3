<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return "Hello World!";
});

Route::get('/awal', function(){
    return redirect()->route('destination');
});

Route::get('/tujuan', function(){
    return 'Tujuan';
})->name('destination');

// Route::redirect('/awal','/tujuan');

Route::get('/user/{name}', function($theName){
    return "User: " . $theName;
});

Route::get('/students/{nim}/{nama}/{prodi}', function($theNim, $theNama, $theProdi){
    return "NIM: " . $theNim . "<br />Nama: " . $theNama . "<br />Prodi: " . $theProdi;
});

Route::get('/students/nama/{nama?}', function($theNama = null) {
    return $theNama;
});

Route::get('/students/prodi/{prodi?}', function($theProdi = "IF") {
    return $theProdi;
});

// Latihan Week 8

Route::get('/fakultas/{fk}/prodi/{prodi}/mhs/{nim}/{nama}', function($theFk, $theProdi, $theNim, $theNama){
    return "NIM: " . $theNim . 
        "<br />Nama: " . $theNama . 
        "<br />Prodi: " . $theProdi . 
        "<br />Fakultas: " . $theFk;
});