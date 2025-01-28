<!-- In resources/views/rak/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container mt-5">
        <h1>Detail Rak</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Rak: {{ $rak->nama }}</h5>
                <p class="card-text">Lokasi Rak: {{ $rak->lokasi }}</p>
                <a href="{{ route('rak.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
