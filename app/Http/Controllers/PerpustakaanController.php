<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('perpustakaan.index', compact('buku'));
    }

    public function create()
    {
        return view('perpustakaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'stok' => 'required|integer',
        ]);

        Buku::create($request->all());
        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('perpustakaan.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('perpustakaan.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'stok' => 'required|integer',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('perpustakaan.index')->with('success', 'Buku berhasil dihapus.');
    }
}
