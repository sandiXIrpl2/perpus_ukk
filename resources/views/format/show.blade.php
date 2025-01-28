<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Format Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Detail Format Buku</h1>
        <a href="{{ route('format-buku.index') }}" class="btn btn-secondary mb-3">Kembali</a>
        
        <div class="card">
            <div class="card-header">
                <h2>{{ $formatBuku->nama }}</h2>
            </div>
            <div class="card-body">
                <p><strong>Keterangan:</strong></p>
                <p>{{ $formatBuku->keterangan }}</p>
            </div>
        </div>
    </div>
</body>
</html>
