<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input dari form ulasan
        $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'rating' => 'required',
            'ulasan' => 'required',
        ]);

        // Cek apakah ulasan sudah ada untuk buku yang sama
        $existingReview = Ulasan::where('id_user', $request->id_user)
            ->where('id_buku', $request->id_buku)
            ->first();

        // Jika ulasan belum ada, simpan ulasan baru
        if (!$existingReview) {
            Ulasan::create([
                'id_user' => $request->id_user,
                'id_buku' => $request->id_buku,
                'rating' => $request->rating,
                'ulasan' => $request->ulasan,
            ]);

            return redirect()->back()->with('success', 'Ulasan berhasil ditambahkan.');
        } else {
            // Jika ulasan sudah ada, kirimkan pesan kesalahan kepada pengguna
            return redirect()->back()->with('error', 'Anda sudah memberikan ulasan untuk buku ini.');
        }
    }
}
