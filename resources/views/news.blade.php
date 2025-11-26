@extends('layouts.app')

@section('title','News')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Berita &amp; Pengumuman</h1>
            <p class="text-muted max-width-72ch">Berita dan pengumuman terbaru dari sekolah. Klik judul untuk membaca detail berita.</p>

            <div class="list-group mt-3">
                @forelse($news as $item)
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="news-item">
                            <div class="news-meta">
                                <div class="badge-date">{{ $item->published_at?->format('d M') }}<br><small class="text-muted">{{ $item->published_at?->format('Y') }}</small></div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h5 class="mb-1">{{ $item->title }}</h5>
                                        <p class="mb-1 text-muted">{{ $item->excerpt }}</p>
                                    </div>
                                    <small class="text-muted">{{ $item->published_at?->format('Y') }}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="list-group-item">Belum ada berita.</div>
                @endforelse
            </div>

            <div class="mt-3">
                {{ $news->links() }}
            </div>
        </div>
    </section>
@endsection
