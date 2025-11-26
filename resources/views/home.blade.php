@extends('layouts.app')

@section('title','Beranda')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="grid">
                <div style="flex:1">
                    <h1 style="font-size:34px;margin:0 0 12px;font-weight:800">Selamat Datang di Nama Sekolah</h1>
                    <p style="margin:0 0 18px;max-width:56ch;opacity:0.95">Membangun generasi unggul melalui pendidikan karakter dan akademik. Lihat program kami, kegiatan, dan pengumuman terbaru di bawah.</p>
                    <div style="display:flex;gap:12px;flex-wrap:wrap">
                        <a href="#profil" class="btn">Tentang Sekolah</a>
                        <a href="#berita" style="background:transparent;border:2px solid rgba(255,255,255,0.18);color:white;padding:10px 14px;border-radius:6px">Berita & Kegiatan</a>
                    </div>
                </div>
                <div style="width:320px;min-width:220px">
                    <div class="card" style="background:rgba(255,255,255,0.12);color:white">
                        <div style="font-weight:700">Informasi Pendaftaran</div>
                        <div style="margin-top:8px;opacity:0.95">PPDB dibuka mulai 1 Juni. Hubungi kantor untuk informasi lebih lanjut.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="profil" style="padding:36px 0">
        <div class="container">
            <h2 style="margin:0 0 10px">Profil Singkat</h2>
            <p style="color:var(--muted);max-width:70ch">Nama Sekolah adalah lembaga pendidikan yang berfokus pada pengembangan potensi akademik dan karakter siswa. Kami mendorong kolaborasi guru, siswa, dan orang tua untuk mencapai prestasi tinggi.</p>
            <div class="card-grid" style="margin-top:18px">
                <div class="card">
                    <h3 style="margin:0 0 8px">Visi</h3>
                    <p style="margin:0;color:var(--muted)">Menjadi sekolah unggul yang berbudaya dan berprestasi.</p>
                </div>
                <div class="card">
                    <h3 style="margin:0 0 8px">Misi</h3>
                    <ul style="margin:0;color:var(--muted);padding-left:18px">
                        <li>Meningkatkan kualitas pembelajaran</li>
                        <li>Mengembangkan karakter siswa</li>
                        <li>Mendorong inovasi dan kreativitas</li>
                    </ul>
                </div>
                <div class="card">
                    <h3 style="margin:0 0 8px">Fasilitas</h3>
                    <p style="margin:0;color:var(--muted)">Laboratorium, Perpustakaan, Lapangan Olahraga, Ruang Kegiatan Ekstrakurikuler.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" style="background:#f9fafb;padding:36px 0">
        <div class="container">
            <h2 style="margin:0 0 10px">Berita & Pengumuman</h2>
            <div class="card-grid">
                <article class="card">
                    <div style="font-weight:700">Lomba Sains Antar Kelas</div>
                    <div style="margin-top:8px;color:var(--muted)">Siswa berprestasi dari berbagai kelas mengikuti lomba sains tahunan.</div>
                </article>
                <article class="card">
                    <div style="font-weight:700">Kegiatan Bakti Sosial</div>
                    <div style="margin-top:8px;color:var(--muted)">Siswa dan guru melaksanakan bakti sosial di lingkungan sekitar.</div>
                </article>
                <article class="card">
                    <div style="font-weight:700">Pengumuman Libur Semester</div>
                    <div style="margin-top:8px;color:var(--muted)">Libur semester akan dimulai tanggal 20 Desember.</div>
                </article>
            </div>
        </div>
    </section>

    <section id="kontak" style="padding:36px 0">
        <div class="container">
            <h2 style="margin:0 0 10px">Kontak</h2>
            <div class="card-grid">
                <div class="card">
                    <div style="font-weight:700">Kantor Sekolah</div>
                    <div style="margin-top:8px;color:var(--muted)">Telp: (021) 0000-000 · email: info@sekolah.example</div>
                </div>
                <div class="card">
                    <div style="font-weight:700">Jam Kerja</div>
                    <div style="margin-top:8px;color:var(--muted)">Senin - Jumat: 07.30 - 15.30</div>
                </div>
                <div class="card">
                    <div style="font-weight:700">Alamat</div>
                    <div style="margin-top:8px;color:var(--muted)">Jl. Contoh No.1, Kota</div>
                </div>
            </div>
        </div>
    </section>

@endsection
