@extends('layouts.app')

@section('title','Akademik')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Akademik</h1>
            <p class="text-muted max-width-72ch">Kami menerapkan kurikulum berbasis kompetensi yang menekankan literasi, numerasi, dan karakter. Berikut beberapa poin penting:</p>

            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Kurikulum</h5>
                        <p class="text-muted mb-0">Kurikulum terbaru dengan penekanan pada keterampilan abad 21 dan pembelajaran berbasis proyek.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Jadwal Pelajaran</h5>
                        <p class="text-muted mb-0">Jadwal terperinci tersedia untuk tiap kelas pada portal siswa dan papan pengumuman sekolah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Program Tambahan</h5>
                        <p class="text-muted mb-0">Bina prestasi, klub sains, bahasa, dan bimbingan karir.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
