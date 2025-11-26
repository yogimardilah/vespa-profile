@extends('layouts.app')

@section('title','Gallery')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Gallery</h1>
            <p class="text-muted" style="max-width:72ch">Kumpulan foto kegiatan sekolah. Bisa memakai grid gambar atau lightbox.</p>
            <div class="row g-3 mt-3">
                @forelse($galleries ?? [] as $gallery)
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-custom overflow-hidden">
                            <img src="{{ $gallery->image }}" class="img-fluid" alt="{{ $gallery->title }}">
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-muted">Belum ada galeri foto.</p>
                    </div>
                @endforelse
            </div>

            @if($galleries?->hasPages())
                <div class="mt-4">
                    {{ $galleries->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
