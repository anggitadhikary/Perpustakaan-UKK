<?php

namespace App\Http\Controllers;

use App\Models\ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_buku' => 'required',
            'ulasan' => 'required',
            'rating' => 'required',
        ]);

        ulasan::create([
            'id_user' => $request->id_user,
            'id_buku' => $request->id_buku,
            'ulasan' => $request->ulasan,
            'rating' => $request->rating,
        ]);

        return redirect()->back();
    }
}
