@extends('layouts.app')

@section('title','About')

@section('content')
    @if(isset($page) && $page)
        <section class="py-5">
            <div class="container">
                <h1>{{ $page->title }}</h1>
                @if($page->excerpt)
                    <p class="text-muted max-width-72ch">{{ $page->excerpt }}</p>
                @endif

                <div class="row">
                    <div class="col-12">
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="py-5">
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
                                <li><strong>Alamat:</strong> {{ setting('school_address', 'Alamat sekolah belum diatur') }}</li>
                                <li><strong>Telepon:</strong> {{ setting('school_phone', '(0266) 0000-000') }}</li>
                                <li><strong>Email:</strong> {{ setting('school_email', 'info@sekolah.example') }}</li>
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

                        @foreach($facilities ?? [] as $facility)
                            <x-facility-item :icon="$facility->icon ?? 'bi bi-circle'" :label="$facility->name" />
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
