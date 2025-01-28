@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Buku</h3>
    <div class="mb-3">
        <strong>Judul Buku:</strong> {{ $buku->judul }}
    </div>
    <div class="mb-3">
        <strong>Pengarang:</strong> {{ $buku->pengarang }}
    </div>
    <div class="mb-3">
        <strong>Stok:</strong> {{ $buku->stok }}
    </div>
    <a href="{{ route('perpustakaan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
