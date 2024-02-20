<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        $buku = buku::where('slug', $slug)->firstOrFail();
        // dd($buku);
        $user = auth()->user();
        $koleksi = koleksi::where('id_user', $user->id)->where('id_buku', $buku->id_buku)->first();

        return view('product-detail', compact('koleksi', 'buku', 'user'));
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

        return redirect()->back();
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
        $koleksi = koleksi::findorFail();
        if (auth()->user()->id === $koleksi->id_user) {
            $koleksi->delete();
            return redirect()->back()->with('success', 'Koleksi dihapus');
        }
        return redirect()->back()->with('error', 'Tidak memiliki izin');
    }
}
