@extends('layouts.app')

@section('title','Parents')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Parents</h1>
            <p class="text-muted" style="max-width:72ch">Informasi untuk orang tua meliputi jadwal pertemuan, panduan akademik, dan cara komunikasi dengan guru.</p>

            <div class="row g-3 mt-3">
                <div class="col-md-6">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Pertemuan Orang Tua</h5>
                        <p class="text-muted mb-0">Jadwal pertemuan orang tua kelas tersedia setiap semester.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Panduan Komunikasi</h5>
                        <p class="text-muted mb-0">Hubungi wali kelas atau admin melalui nomor kantor untuk penjadwalan pertemuan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
