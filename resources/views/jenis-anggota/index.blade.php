<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1>Jenis Anggota Perpustakaan</h1>

        <!-- Menampilkan Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol Tambah Jenis Anggota -->
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahJenisAnggotaModal">Tambah Jenis Anggota</button>

        <!-- Tabel Jenis Anggota -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jenis Anggota</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenisAnggota as $index => $jenis)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $jenis->nama_jenis_anggota }}</td>
                        <td>{{ $jenis->keterangan }}</td>
                        <td>
                            <a href="{{ route('jenis-anggota.edit', $jenis->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('jenis-anggota.destroy', $jenis->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal Tambah Jenis Anggota -->
        <div class="modal fade" id="tambahJenisAnggotaModal" tabindex="-1" aria-labelledby="tambahJenisAnggotaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahJenisAnggotaModalLabel">Tambah Jenis Anggota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('jenis-anggota.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_jenis_anggota" class="form-label">Nama Jenis Anggota</label>
                                <input type="text" class="form-control" id="nama_jenis_anggota" name="nama_jenis_anggota" required>
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
