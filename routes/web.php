<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});


Route::get('/main', function () {
    return view('main');
});

Route::get('/buku', function () {
    return view('buku');
});


Route::get('/peminjam', function () {
    return view('peminjam');
});

Route::get('/pengembalian', function () {
    return view('pengembalian');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/login', function () {
    return view('login');
});