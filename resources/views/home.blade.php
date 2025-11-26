@extends('layouts.app')

@section('title','Beranda')

@section('content')
    <section class="hero-custom py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="display-6 fw-bold">Selamat Datang di SDIT RUSMANI</h1>
                    <p class="lead text-white">Membangun generasi unggul melalui pendidikan karakter dan akademik. Pelajari program kami dan ikuti kegiatan terbaru.</p>
                    <div class="d-flex gap-2">
                        <a href="{{ route('spmb') }}" class="btn btn-warning">Daftar SPMB</a>
                        <a href="{{ route('news') }}" class="btn btn-outline-light">Berita &amp; Kegiatan</a>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <img src="/images/hero.jpeg" alt="hero" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-3">Berita Terbaru</h2>
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="card card-custom">
                        <img src="/images/news1.jpeg" class="card-img-top rounded-top" alt="berita">
                        <div class="card-body">
                            <h5 class="card-title">Lomba Sains Antar Kelas</h5>
                            <p class="card-text text-muted">Siswa berprestasi dari berbagai kelas mengikuti lomba sains tahunan. Selengkapnya di halaman News.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom">
                        <img src="/images/news2.jpeg" class="card-img-top rounded-top" alt="berita">
                        <div class="card-body">
                            <h5 class="card-title">Bakti Sosial Sekolah</h5>
                            <p class="card-text text-muted">Kegiatan bakti sosial melibatkan siswa dan guru untuk membantu lingkungan sekitar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-3">
                    <div class="card card-custom h-100 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-circle">NS</div>
                            <div>
                                <h4 class="mb-0">Profil Singkat</h4>
                                <div class="text-muted small">Didirikan 1998 · Sekolah Menengah</div>
                            </div>
                        </div>

                        <p class="mt-3 text-muted">SDIT RUSMANI berdiri sejak 1998 dengan tujuan mencetak lulusan berkarakter dan berprestasi. Kami menekankan keseimbangan akademik dan kegiatan karakter.</p>
                        <hr>
                        <ul class="list-unstyled mb-0">
                            <li><strong>Alamat:</strong> Jl. Gn. Karang No.28, Limusnunggal, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43165</li>
                            <li><strong>Telepon:</strong> (0266) 0000-000</li>
                            <li><strong>Email:</strong> info@sekolah.example</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-5 mb-3">
                    <h2 class="section-title">Visi &amp; Misi</h2>
                    <p class="section-sub">Visi, misi, dan tujuan pendidikan yang menjadi pedoman kegiatan sekolah.</p>

                    <div class="card mb-3 card-custom p-3">
                        <h5 class="mb-2">Visi</h5>
                        <p class="text-muted mb-0">Menjadi institusi pendidikan unggul yang berkarakter dan berprestasi.</p>
                    </div>

                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Misi</h5>
                        <ul class="text-muted mb-0">
                            <li>Meningkatkan kualitas pembelajaran</li>
                            <li>Mengembangkan karakter siswa</li>
                            <li>Mendorong inovasi dan kreativitas</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-3 mb-3">
                    <h3 class="section-title">Fasilitas</h3>
                    <p class="section-sub">Fasilitas yang mendukung pembelajaran dan kegiatan siswa.</p>

                    <div class="facility-item">
                        <div class="facility-icon"><i class="bi bi-flask-fill"></i></div>
                        <div>Laboratorium IPA</div>
                    </div>
                    <div class="facility-item">
                        <div class="facility-icon"><i class="bi bi-book-fill"></i></div>
                        <div>Perpustakaan</div>
                    </div>
                    <div class="facility-item">
                        <div class="facility-icon"><i class="bi bi-basketball"></i></div>
                        <div>Lapangan Olahraga</div>
                    </div>
                    <div class="facility-item">
                        <div class="facility-icon"><i class="bi bi-music-note-beamed"></i></div>
                        <div>Ruang Ekstrakurikuler</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-3">Kontak Singkat</h2>
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="card card-custom p-3">
                        <div class="fw-bold mb-3">Hubungi Kami</div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div><strong>Kantor Sekolah</strong></div>
                                <div class="text-muted">Jl. Gn. Karang No.28, Limusnunggal, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43165</div>
                            </div>
                            <div class="col-md-6">
                                <div><strong>Telepon</strong></div>
                                <div class="text-muted">(0266) 0000-000</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div><strong>Email</strong></div>
                                <div class="text-muted">info@sekolah.example</div>
                            </div>
                            <div class="col-md-6">
                                <div><strong>Jam Kerja</strong></div>
                                <div class="text-muted">Senin-Jumat 07:30 - 15:30</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-3">
                        <div class="fw-bold mb-2">Lokasi</div>
                        <div id="mapHome" style="height:220px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (document.getElementById('mapHome')) {
                const map = L.map('mapHome').setView([-6.9457120233073635, 106.93933584787159], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap',
                    maxZoom: 19
                }).addTo(map);
                L.marker([-6.9457120233073635, 106.93933584787159]).addTo(map)
                    .bindPopup('SDIT RUSMANI<br>Jl. Gn. Karang No.28, Limusnunggal, Kec. Cibeureum, Kota Sukabumi, Jawa Barat 43165')
                    .openPopup();
            }
        });
    </script>

@endsection
