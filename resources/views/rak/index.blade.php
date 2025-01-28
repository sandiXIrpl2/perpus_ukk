@extends('layouts.app')

<style>
    body {
        background-color: #f8f9fc;
        font-family: 'Poppins', sans-serif;
    }
    .sidebar {
        height: 100vh;
        width: 250px;
        position: fixed;
        background: linear-gradient(180deg, #4e73df, #224abe);
        color: white;
        padding-top: 60px; /* Tambahkan padding atas */
        overflow-y: auto;  /* Tambahkan scroll jika konten terlalu panjang */
    }
    .sidebar a {
        text-decoration: none;
        color: #ced4da;
        padding: 10px 20px;
        display: block;
    }
    .sidebar a:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }
    .content {
        margin-left: 260px;
        padding: 20px;
    }
    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .card .card-title {
        font-weight: 600;
    }
    .navbar {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="sidebar">
    <h4 class="text-center">Admin</h4>
    <a href="/home"><i class="bi bi-building"></i> Dashboard</a>
    <a href="/perpustakaan"><i class="bi bi-building"></i> Perpustakaan</a>
    <a href="/rak"><i class="bi bi-layout-text-sidebar-reverse"></i> Rak</a>
    <a href="/ddc"><i class="bi bi-list-check"></i> DDC</a>
    <a href="{{ route('format-buku.index') }}"><i class="bi bi-file-earmark-text"></i> Format Buku</a>
    <a href="{{ route('jenis-anggota.index') }}"><i class="bi bi-people"></i> Jenis Anggota</a>
    <a href="#"><i class="bi bi-person"></i> Anggota</a>
    <a href="/penerbit"><i class="bi bi-building"></i> Penerbit</a>
    <a href="#"><i class="bi bi-pencil-square"></i> Pengarang</a>
    <a href="#"><i class="bi bi-journal-bookmark"></i> Pustaka</a>
    <a href="#"><i class="bi bi-arrow-left-right"></i> Transaksi</a>
</div>

@section('content')
<div class="content" style="margin-left: 250px; padding: 20px;">
    <div class="container mt-5">
        <h1>Daftar Rak Buku</h1>
        <a href="{{ route('rak.create') }}" class="btn btn-primary mb-3">Tambah Rak</a>

        <!-- Table to display racks -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Rak</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rak as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->nama }}</td>
                        <td>{{ $r->lokasi }}</td>
                        <td>
                            <a href="{{ route('rak.edit', $r->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('rak.destroy', $r->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('navbar')
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <div class="d-flex align-items-center ms-auto">
                <a href="#" class="text-decoration-none text-dark me-3"><i class="bi bi-bell"></i></a>
                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-person-circle"></i> Hi, User</a>
            </div>
        </div>
    </nav>
@endsection

@push('styles')
    <style>
        /* Custom Styles */
        body {
            background-color: #f8f9fc;
            font-family: 'Poppins', sans-serif;
        }

        .content {
            padding: 20px;
        }

        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            margin-top: 30px;
        }
    </style>
@endpush
