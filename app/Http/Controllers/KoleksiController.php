<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\koleksi;
use App\Models\ulasan;
use App\Models\User;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();

        $koleksi = koleksi::where('id_user', $user->id)->with('buku')->get();
        // dd($koleksi);
        return view('koleksi', compact('koleksi', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $buku = buku::where('slug', $slug)->with(['kategori'])->firstOrFail();
        // dd($buku);
        $user = auth()->user();
        $koleksi = koleksi::where('id_user', $user->id)->where('id_buku', $buku->id_buku)->first();
        // $ulasan = ulasan::all();
        $ulasan = ulasan::where('id_buku', $buku->id_buku)->get();

        // dd($koleksi);
        //Tambah rating
        $totalRating = $ulasan->sum('rating');
        //hitung ulasannya ada berapa
        $totalUlasan = $ulasan->count();
        //kalo ulasan lebih dari 0
        if ($totalUlasan > 0) {
            //ulasan / jumlah rating
            $rataratarating = $totalRating / $totalUlasan;
        } else {
            //kalo rating nya belom ada maka ratingnya 0
            $rataratarating = 0;
        }

        return view('product-detail', compact('koleksi', 'buku', 'user', 'ulasan', 'rataratarating'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required'
        ]);

        koleksi::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
        ]);

        return redirect()->back()->with('success', 'Book is bookmarked');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $koleksi = koleksi::findOrFail($id);

        // Pastikan pengguna yang sedang login adalah pemilik koleksi
        if (auth()->user()->id === $koleksi->id_user) {
            // Hapus koleksi buku
            $koleksi->delete();

            // Redirect kembali dengan pesan sukses
            return redirect()->back()->with('success', 'Buku berhasil dihapus dari koleksi.');
        }

        // Redirect kembali dengan pesan gagal jika pengguna tidak memiliki hak akses
        return redirect()->back()->with('error', 'Anda tidak memiliki izin untuk menghapus buku dari koleksi ini.');
    }
}
