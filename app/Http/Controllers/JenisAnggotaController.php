<?php

namespace App\Http\Controllers;

use App\Models\JenisAnggota;
use Illuminate\Http\Request;

class JenisAnggotaController extends Controller
{
    public function index()
    {
        $jenisAnggota = JenisAnggota::all();
        return view('jenis-anggota.index', compact('jenisAnggota'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis_anggota' => 'required|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        JenisAnggota::create($request->all());

        return redirect()->route('jenis-anggota.index')->with('success', 'Jenis Anggota berhasil ditambahkan');
    }

    public function edit($id)
    {
        $jenisAnggota = JenisAnggota::findOrFail($id);
        return view('jenis-anggota.edit', compact('jenisAnggota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jenis_anggota' => 'required|string|max:255',
            'keterangan' => 'nullable|string'
        ]);

        $jenisAnggota = JenisAnggota::findOrFail($id);
        $jenisAnggota->update($request->all());

        return redirect()->route('jenis-anggota.index')->with('success', 'Jenis Anggota berhasil diperbarui');
    }

    public function destroy($id)
    {
        JenisAnggota::destroy($id);
        return redirect()->route('jenis-anggota.index')->with('success', 'Jenis Anggota berhasil dihapus');
    }
}
