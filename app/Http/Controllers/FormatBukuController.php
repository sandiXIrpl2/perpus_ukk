<?php

namespace App\Http\Controllers;

use App\Models\FormatBuku;
use Illuminate\Http\Request;

class FormatBukuController extends Controller
{
    public function index()
    {
        $formatBuku = FormatBuku::all();
        return view('format_buku.index', compact('formatBuku'));
    }

    public function create()
    {
        return view('format_buku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        FormatBuku::create($request->all());
        return redirect()->route('format-buku.index')->with('success', 'Format buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $formatBuku = FormatBuku::findOrFail($id);
        return view('format_buku.show', compact('formatBuku'));
    }

    public function edit($id)
    {
        $formatBuku = FormatBuku::findOrFail($id);
        return view('format_buku.edit', compact('formatBuku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $formatBuku = FormatBuku::findOrFail($id);
        $formatBuku->update($request->all());
        return redirect()->route('format-buku.index')->with('success', 'Format buku berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $formatBuku = FormatBuku::findOrFail($id);
        $formatBuku->delete();
        return redirect()->route('format-buku.index')->with('success', 'Format buku berhasil dihapus.');
    }
}
