<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class BukuController extends Controller
{
    public function landing()
    {
        $buku = buku::latest()->paginate(8);
        // dd($buku);
        return view('welcome', compact('buku'));
    }

    public function list()
    {
        $buku = buku::latest()->with('kategori')->paginate(5);

        // dd($bukuRomance);
        return view('list-buku', compact('buku'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // $kategori = kategori::all();
        $buku = buku::with(['kategori'])->paginate(5);
        // dd($buku);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();

        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
            'gambar' => 'required|image',
            'deskripsi' => 'required',
            'stok' => 'required',
        ], [
            'judul.required' => 'Judul harus di isi',
            'penulis.required' => 'Penulis harus di isi',
            'penerbit.required' => 'Penerbit harus di isi',
            'tahunterbit.required' => 'Tahun terbit harus di isi',
            'gambar.required' => 'Gambar harus di isi',
            'deskripsi.required' => 'Deskripsi harus di isi',
            'stok.required' => 'stok harus di isi',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buku', $gambar->hashName());

        buku::create([
            'id_kategori' => $request->id_kategori,
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunterbit' => $request->tahunterbit,
            'gambar' => $gambar->hashName(),
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
        ]);


        return redirect()->to('buku')->with('succes', 'Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buku = buku::findorFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = kategori::all();
        $buku = buku::findorFail($id);
        return view('buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahunterbit' => 'required',
            'deskripsi' => 'required',
            'stok' => 'required',
        ], [
            'judul.required' => 'Judul harus di isi',
            'penulis.required' => 'Penulis harus di isi',
            'penerbit.required' => 'Penerbit harus di isi',
            'tahunterbit.required' => 'Tahun terbit harus di isi',
            'deskripsi.required' => 'Deskripsi harus di isi',
            'stok.required' => 'stok harus di isi',
        ]);
        $buku = buku::findorFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/buku', $gambar->hashName());

            File::delete(public_path('public/buku') . '/' . $buku->gambar);

            $buku->update([
                'gambar' => $gambar->hashName(),
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahunterbit' => $request->tahunterbit,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
            ]);
        } else {
            $buku->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahunterbit' => $request->tahunterbit,
                'deskripsi' => $request->deskripsi,
                'stok' => $request->stok,
            ]);
        }
        return redirect()->to('buku')->with('succes', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = buku::findorFail($id);
        File::delete(public_path('storage/buku') . '/' . $buku->gambar);
        $buku->delete();
        return redirect()->to('buku')->with('succes', 'Berhasil edit data');
    }
}
