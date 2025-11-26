@extends('layouts.app')

@section('title','News')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Berita &amp; Pengumuman</h1>
            <p class="text-muted max-width-72ch">Berita dan pengumuman terbaru dari sekolah. Klik judul untuk membaca detail berita.</p>

            <div class="list-group mt-3">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="news-item">
                        <div class="news-meta">
                            <div class="badge-date">12 Nov<br><small class="text-muted">2025</small></div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="mb-1">Lomba Sains Antar Kelas</h5>
                                    <p class="mb-1 text-muted">Siswa-siswa berkompetisi dalam lomba sains tahunan untuk mengasah kemampuan riset dan presentasi.</p>
                                </div>
                                <small class="text-muted">Sekolah</small>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#" class="list-group-item list-group-item-action">
                    <div class="news-item">
                        <div class="news-meta">
                            <div class="badge-date">05 Okt<br><small class="text-muted">2025</small></div>
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="mb-1">Bakti Sosial Sekolah</h5>
                                    <p class="mb-1 text-muted">Kegiatan bakti sosial melibatkan siswa dan guru dalam program peduli lingkungan dan masyarakat.</p>
                                </div>
                                <small class="text-muted">Kegiatan</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection
