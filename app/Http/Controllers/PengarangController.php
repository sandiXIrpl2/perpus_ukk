<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    public function index()
    {
        $pengarang = Pengarang::all();
        return view('pengarang.index', compact('pengarang'));
    }

    public function create()
    {
        return view('pengarang.create');
    }

    public function store(Request $request)
    {
        Pengarang::create($request->all());
        return redirect()->route('pengarang.index');
    }
}