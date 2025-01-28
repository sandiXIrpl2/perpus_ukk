@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Rak</h1>
    <form action="{{ route('rak.update', $rak->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $rak->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $rak->lokasi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
<!-- In resources/views/rak/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container mt-5">
        <h1>Edit Rak</h1>
        <form action="{{ route('rak.update', $rak->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Rak</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $rak->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Rak</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $rak->lokasi }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
