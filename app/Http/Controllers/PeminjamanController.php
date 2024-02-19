<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pinjam = peminjaman::latest()->paginate(5);
        // dd($pinjam);
        return view('peminjaman.index', compact('pinjam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjamList = User::where('role', 'peminjam')->get();
        $bukuList = buku::all();

        return view('peminjaman.create', compact('peminjamList', 'bukuList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah' => 'required',
        ], [
            'tanggal_pinjam.required' => ' Tanggal Pinjam harus diisi',
            'tanggal_kembali.required' => ' Tanggal Kembali harus diisi',
            'jumlah.required' => ' Jumlah harus diisi',
        ]);

        peminjaman::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => $request->status,
            'jumlah' => $request->jumlah

        ]);
        return redirect()->to('pinjam')->with('succes', 'Berhasil tambah data');
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
        //
    }
}
