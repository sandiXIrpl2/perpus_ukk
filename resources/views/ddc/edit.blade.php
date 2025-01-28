<!-- resources/views/ddc/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container mt-5">
        <h1>Edit DDC</h1>
        <form action="{{ route('ddc.update', $ddc->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="kode" class="form-label">Kode DDC</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $ddc->kode }}" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama DDC</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $ddc->nama }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
