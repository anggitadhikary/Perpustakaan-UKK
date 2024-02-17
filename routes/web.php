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
Route::get('/kategori', function () {
    return view('kategori');
});
Route::get('/buku-detail', function () {
    return view('product-detail');
});

// Route::get('/struk', function () {
//     return view('struk');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/buku', function () {
    return view('buku.index');
});
Route::get('buku/edit', function () {
    return view('buku.edit');
});
Route::get('buku/create', function () {
    return view('buku.create');
});
