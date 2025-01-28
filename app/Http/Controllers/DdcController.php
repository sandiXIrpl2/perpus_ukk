<?php

// In app/Http/Controllers/DdcController.php
namespace App\Http\Controllers;

use App\Models\Ddc;
use Illuminate\Http\Request;

class DdcController extends Controller
{
    public function index()
    {
        $ddcs = Ddc::all();
        return view('ddc.index', compact('ddcs'));
    }

    public function create()
    {
        return view('ddc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        Ddc::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ddc.index')->with('success', 'DDC created successfully');
    }

    public function edit($id)
    {
        $ddc = Ddc::findOrFail($id);
        return view('ddc.edit', compact('ddc'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $ddc = Ddc::findOrFail($id);
        $ddc->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ddc.index')->with('success', 'DDC updated successfully');
    }

    public function destroy($id)
    {
        $ddc = Ddc::findOrFail($id);
        $ddc->delete();

        return redirect()->route('ddc.index')->with('success', 'DDC deleted successfully');
    }
}
