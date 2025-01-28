<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Perpustakaan</title>
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
</head>
<body>
<div class="sidebar">
    <h4 class="text-center">Admin</h4>
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
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-people"></i> Visitors</h5>
                        <p class="card-text display-6">1,294</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-book"></i> Subscribers</h5>
                        <p class="card-text display-6">1,303</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-cart"></i> Sales</h5>
                        <p class="card-text display-6">$1,345</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-bag"></i> Orders</h5>
                        <p class="card-text display-6">576</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User Statistics</h5>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transactions Overview</h5>
                        <canvas id="donutChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Line Chart
        const ctxLine = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Visitors',
                    data: [500, 700, 650, 800, 750, 900, 850, 950, 920, 1000, 980, 1100],
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: { enabled: true }
                },
                scales: {
                    x: { title: { display: true, text: 'Months' }},
                    y: { title: { display: true, text: 'Visitors' }, ticks: { stepSize: 100 }}
                }
            }
        });

        // Donut Chart
        const ctxDonut = document.getElementById('donutChart').getContext('2d');
        const donutChart = new Chart(ctxDonut, {
            type: 'doughnut',
            data: {
                labels: ['Sales', 'Distribute', 'Return'],
                datasets: [{
                    data: [80, 10, 10],
                    backgroundColor: ['#007bff', '#ffc107', '#dc3545']
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'bottom' }
                }
            }
        });
    </script>
</body>
</html>