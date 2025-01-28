<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    public function index()
    {
        $formats = Format::all();
        return view('format.index', compact('formats'));
    }

    public function create()
    {
        return view('format.create');
    }

    public function store(Request $request)
    {
        Format::create($request->all());
        return redirect()->route('format.index');
    }
}