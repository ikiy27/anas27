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

Route::get('/Selamat-Datang', function () {
    return view('Latihan.selamat');
});

Route::get('/Utama', function () {
    return view('Latihan.index');
});
Route::get('/Utama/Borang', function () { //url browser
    return view('Latihan.Pendaftaran'); // original path
});
