<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Selamat datang di Biodata saya<br><hr>'
        . 'Nama saya <b>Muhammad AliRizki</b><br>'
        . '<br>'
        . 'Saya sekolah di sekolah Smk Assalaam bandung<br>'
        . '<br>'
        . 'Umur saya saat ini 17 tahun dan jalan ke umur 18 tahun di tahun ini<br>'
        . '<br>'
        . 'Tanggal lahir saya adalah tanggal 31 agustus 2006<br>'
        . '<br>'
        . 'Saya lahir di bandung<br>'
        . '<br>'
        . 'Jurusan yg saya ambil adalah RPL yaitu Rekayasa Perangkat Lunak<br>'
        . '<br>'
        . 'Saat ini saya duduk di bangku kelas 11<br>'
        . '<br>'
        . '<br>'
        . 'Salam Kenal Semua';
});

Route::get('animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('vegetables', function () {
    $fruit = ["apple", "grape", "starfruit", "melon"];
    return view('vegetable_page', ['buah' => $fruit]);
});

//route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

//buat sebuah route parameter dengan 3 buah parameter,
//nama, bb, tb

Route::get('spek/{nama}/{bb}/{tb}', function ($a, $bb, $tb) {
    
    $tinggi_m = $tb / 100;
    $bmi = $bb / ($tinggi_m ** 2);
    if($bmi > 30){
        $ket = "Obesitas";
    } elseif ($bmi > 25){
        $ket = "Kelebihan";
    } elseif ($bmi > 18.5){
        $ket = "Ideal";
    } elseif ($bmi < 18.5){
        $ket = "Kekurangan berat badan";
    }

    return "Nama: $a<br>"
        . "Berat badan: $bb Kg<br>"
        . "Tinggi badan: $tb Cm<br>"
        . "Nilai BMI: $bmi<br>"
        . "Keterangan: $ket";
});