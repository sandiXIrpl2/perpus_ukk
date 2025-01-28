<h1>Tambah Anggota</h1>
<form action="{{ route('anggota.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" required><br>
    <label for="email">Email:</label>
    <input type="email" name="email" required><br>
    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" required><br>
    <button type="submit">Simpan</button>
</form>
