<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Tambahkan link ke CSS Bootstrap atau file CSS lain jika diperlukan -->
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 bg-dark text-white p-3">
                <div class="sidebar">
                    <h3 class="text-center">Admin</h3>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('perpustakaan.index') }}" class="text-white">Perpustakaan</a></li>
                        <li><a href="{{ route('fitur1.index') }}" class="text-white">Fitur 1</a></li>
                        <li><a href="{{ route('fitur2.index') }}" class="text-white">Fitur 2</a></li>
                        <!-- Tambahkan link untuk fitur lainnya -->
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col-md-10 p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Tambahkan JS jika diperlukan -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>