<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Sekolah')</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Leaflet CSS -->
        <link href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="/css/custom.css" rel="stylesheet">
    </head>
    <body>
        <header class="bg-white shadow-sm">
            <nav class="navbar navbar-expand-lg navbar-light container py-3">
                <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                    <img src="/images/logo.jpeg" alt="logo" height="40">
                    <div class="d-none d-sm-block">
                        <div class="fw-bold">SDIT RUSMANI</div>
                        <div class="text-muted small">SEKOLAH PENCINTA AL-QUR'AN</div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('akademik') }}">Akademik</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('news') }}">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('gallery') }}">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('students') }}">Students</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('parents') }}">Parents</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('spmb') }}">SPMB</a></li>
                        <li class="nav-item ms-2"><a class="btn btn-warning btn-sm" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="bg-dark text-light py-4 mt-5">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-start gap-3">
                <div>
                    <div class="fw-bold">SDIT RUSMANI</div>
                    <div class="small text-muted">Jl. Contoh No.1 · Kota · Provinsi</div>
                </div>
                <div class="small text-muted">© {{ date('Y') }} SDIT RUSMANI · Semua hak dilindungi</div>
            </div>
        </footer>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Leaflet JS -->
        <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.min.js"></script>
    </body>
</html>
