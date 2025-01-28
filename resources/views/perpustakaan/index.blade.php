<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
            padding-top: 60px;
            overflow-y: auto;
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
</head>
<body>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <div class="d-flex align-items-center ms-auto">
            <a href="#" class="text-decoration-none text-dark me-3"><i class="bi bi-bell"></i></a>
            <a href="#" class="text-decoration-none text-dark"><i class="bi bi-person-circle"></i> Hi, User</a>
        </div>
    </div>
</nav>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('perpustakaan.create') }}" class="btn btn-primary mb-3">Tambah Buku</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Buku</th>
                            <th>Pengarang</th>
                            <th>Stok</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $b)
                            <tr>
                                <td>{{ $b->id }}</td>
                                <td>{{ $b->judul }}</td>
                                <td>{{ $b->pengarang }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>
                                    <a href="{{ route('perpustakaan.edit', $b->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('perpustakaan.destroy', $b->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
