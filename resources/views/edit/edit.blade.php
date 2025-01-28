@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Penerbit</h1>
    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Penerbit</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $penerbit->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ $penerbit->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection