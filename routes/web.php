<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
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
})->name('welcome');

// Route::get('/kategori', function () {
//     return view('kategori');
// });
// Route::get('/', function () {
//     return view('product-detail');
// });

Route::group(['middleware' => 'role:admin,petugas'], function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('buku', BukuController::class);
    Route::resource('pinjam', PeminjamanController::class);
});

Route::group(['middleware' => 'role:peminjam'], function () {
    Route::get('/peminjam', function () {
        return view('peminjam');
    })->name('peminjam');
});

Route::get('/kategori', [BukuController::class, 'list']);
Route::get('/Buku/detail/{slug}', [KoleksiController::class, 'create']);
Route::post('/koleksi', [KoleksiController::class, 'store'])->name('koleksi.store');
Route::delete('koleksi/{id}', [KoleksiController::class, 'delete'])->name('koleksi.delete');

require __DIR__ . '/auth.php';
