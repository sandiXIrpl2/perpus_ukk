<!-- resources/views/ddc/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container mt-5">
        <h1>Tambah DDC</h1>
        <form action="{{ route('ddc.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode DDC</label>
                <input type="text" class="form-control" id="kode" name="kode" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama DDC</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
