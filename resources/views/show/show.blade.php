@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penerbit</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $penerbit->nama }}</h5>
            <p class="card-text">Alamat: {{ $penerbit->alamat }}</p>
        </div>
    </div>
    <a href="{{ route('penerbit.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection