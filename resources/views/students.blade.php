@extends('layouts.app')

@section('title','Students')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Students</h1>
            <p class="text-muted" style="max-width:72ch">Halaman khusus siswa berisi jadwal pelajaran, materi pembelajaran, dan informasi ekstrakurikuler.</p>

            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Portal Siswa</h5>
                        <p class="text-muted mb-0">Akses nilai, materi, dan tugas melalui portal siswa (coming soon).</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Ekstrakurikuler</h5>
                        <p class="text-muted mb-0">Daftar klub: Sains, Olahraga, Seni, Bahasa, dan Pramuka.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
