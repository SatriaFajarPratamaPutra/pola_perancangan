<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


// Halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Halaman login
Route::get('/logi', function () {
    return view('login');
})->name('login');

// Route untuk autentikasi login (POST)
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');

// Halaman utama setelah login
Route::get('/home', function () {
    return view('adm');
})->name('mainpage');

Route::get('/data', function () {
    return view('data');
});
Route::get('/adm', function () {
    return view('adm'); // Mengarahkan ke view adm.blade.php
})->name('adm.page');



// Halaman register
Route::get('/regi', function () {
    return view('regi');
})->name('register');

// Route untuk memproses registrasi (POST)
Route::post('/register', [AuthController::class, 'register'])->name('register.post');;

// Route untuk menyimpan data film
