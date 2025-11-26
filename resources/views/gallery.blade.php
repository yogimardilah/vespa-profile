@extends('layouts.app')

@section('title','Gallery')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Gallery</h1>
            <p class="text-muted" style="max-width:72ch">Kumpulan foto kegiatan sekolah. Bisa memakai grid gambar atau lightbox.</p>
            <div class="row g-3 mt-3">
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom overflow-hidden">
                        <img src="/images/gallery1.jpeg" class="img-fluid" alt="gallery">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom overflow-hidden">
                        <img src="/images/gallery2.jpeg" class="img-fluid" alt="gallery">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="card card-custom overflow-hidden">
                        <img src="/images/gallery3.jpeg" class="img-fluid" alt="gallery">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
