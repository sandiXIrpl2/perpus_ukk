<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan - Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fc;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #212529;
            color: white;
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #ced4da;
            padding: 10px 20px;
            display: block;
        }
        .sidebar a:hover {
            background-color: #343a40;
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
        }
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center">Perpustakaan</h4>
        <a href="#"><i class="bi bi-house-door"></i> Dashboard</a>
        <a href="#"><i class="bi bi-people"></i> Anggota</a>
        <a href="#"><i class="bi bi-book"></i> Buku</a>
        <a href="#"><i class="bi bi-arrow-up-right"></i> Peminjaman</a>
        <a href="#"><i class="bi bi-arrow-down-left"></i> Pengembalian</a>
        <a href="#"><i class="bi bi-cash-stack"></i> Denda</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="d-flex align-items-center">
                <a href="#" class="text-decoration-none text-dark me-3"><i class="bi bi-bell"></i></a>
                <a href="#" class="text-decoration-none text-dark"><i class="bi bi-person-circle"></i> Hi, User</a>
            </div>
        </div>
    </nav>

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people"></i> Total Anggota</h5>
                        <p class="card-text display-6">1,294</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-check"></i> Anggota Aktif</h5>
                        <p class="card-text display-6">1,100</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-person-dash"></i> Anggota Tidak Aktif</h5>
                        <p class="card-text display-6">194</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Anggota</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>johndoe@example.com</td>
                                    <td>Aktif</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>janesmith@example.com</td>
                                    <td>Aktif</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Michael Johnson</td>
                                    <td>michaelj@example.com</td>
                                    <td>Tidak Aktif</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
