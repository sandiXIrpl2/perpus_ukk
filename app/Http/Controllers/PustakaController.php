<?php

namespace App\Http\Controllers;

use App\Models\Pustaka;
use Illuminate\Http\Request;

class PustakaController extends Controller
{
    public function index()
    {
        $pustaka = Pustaka::all();
        return view('pustaka.index', compact('pustaka'));
    }

    public function create()
    {
        return view('pustaka.create');
    }

    public function store(Request $request)
    {
        Pustaka::create($request->all());
        return redirect()->route('pustaka.index');
    }
}