<?php

namespace App\Http\Controllers;

use App\Models\buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $buku = buku::latest()->paginate(5);
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
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
            'genre' => 'required',
            'stok' => 'required',
        ], [
            'judul.required' => 'Judul harus di isi',
            'penulis.required' => 'Penulis harus di isi',
            'penerbit.required' => 'Penerbit harus di isi',
            'tahunterbit.required' => 'Tahun terbit harus di isi',
            'gambar.required' => 'Gambar harus di isi',
            'deskripsi.required' => 'Deskripsi harus di isi',
            'genre.required' => 'genre harus di isi',
            'stok.required' => 'stok harus di isi',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buku', $gambar->hashName());

        buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahunterbit' => $request->tahunterbit,
            'gambar' => $gambar->hashName(),
            'deskripsi' => $request->deskripsi,
            'genre' => $request->genre,
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
        $buku = buku::findorFail($id);
        return view('buku.edit', compact('buku'));
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
            'genre' => 'required',
            'stok' => 'required',
        ], [
            'judul.required' => 'Judul harus di isi',
            'penulis.required' => 'Penulis harus di isi',
            'penerbit.required' => 'Penerbit harus di isi',
            'tahunterbit.required' => 'Tahun terbit harus di isi',
            'deskripsi.required' => 'Deskripsi harus di isi',
            'genre.required' => 'genre harus di isi',
            'stok.required' => 'stok harus di isi',
        ]);
        $buku = buku::findorFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/buku' . $gambar->hashName());

            File::delete(public_path('storage/buku') . '/' . $buku->gambar);

            $buku->update([
                'gambar' => $gambar->hashName(),
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahunterbit' => $request->tahunterbit,
                'deskripsi' => $request->deskripsi,
                'genre' => $request->genre,
                'stok' => $request->stok,
            ]);
        } else {
            $buku->update([
                'judul' => $request->judul,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tahunterbit' => $request->tahunterbit,
                'deskripsi' => $request->deskripsi,
                'genre' => $request->genre,
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
        
    }
}
