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
        // dd("test");
        $pinjam = peminjaman::latest()->with('user')->with('buku')->paginate(5);
        // $pinjam = peminjaman::latest()->paginate(5);

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
            'status' => 'required',
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
            'jumlah' => $request->jumlah,
            'status' => $request->status

        ]);
        return redirect()->to('pinjam')->with('succes', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peminjamList = User::where('role', 'peminjam')->get();
        $bukuList = buku::all();
        $pinjam = peminjaman::findorFail($id);

        return view('peminjaman.edit', compact('peminjamList', 'bukuList', 'pinjam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'status' => 'required'
        ], [
            'status.required' => 'Status harus di isi'
        ]);

        $pinjam = peminjaman::findorFail($id);

        $pinjam->update([
            'status' => $request->status,
        ]);

        return redirect()->to('pinjam')->with('succes', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $pinjam = peminjaman::findorFail($id);

        $pinjam->delete();
        return redirect()->to('pinjam')->with('succes', 'Berhasil hapus data');
    }
    public function cetak()
    {
        $pinjam = peminjaman::latest()->with('user')->with('buku')->paginate(2);
        return view('peminjaman.cetak', compact('pinjam'));
    }
}
