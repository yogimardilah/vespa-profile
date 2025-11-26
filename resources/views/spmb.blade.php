@extends('layouts.app')

@section('title','SPMB')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>SPMB</h1>
            <p class="text-muted" style="max-width:72ch">Penerimaan Siswa Baru (SPMB) - Informasi pendaftaran, syarat, dan alur pendaftaran online/offline.</p>

            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Alur Pendaftaran</h5>
                        <ol class="text-muted mb-0">
                            <li>Isi formulir pendaftaran</li>
                            <li>Unggah dokumen persyaratan</li>
                            <li>Ikuti seleksi/pertemuan orang tua</li>
                            <li>Pengumuman hasil</li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-custom p-3">
                        <h5 class="mb-2">Form Pendaftaran Singkat</h5>
                        <form method="post" action="#">
                            <div class="mb-2"><input placeholder="Nama Lengkap" class="form-control"></div>
                            <div class="mb-2"><input placeholder="Tanggal Lahir" class="form-control"></div>
                            <div class="mb-2"><input placeholder="Asal Sekolah" class="form-control"></div>
                            <div><button class="btn btn-warning" type="submit">Daftar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
