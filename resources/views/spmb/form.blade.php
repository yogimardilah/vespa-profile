@extends('layouts.app')

@section('title','Pendaftaran SPMB')

@section('content')
<section class="py-5">
  <div class="container">
    <h1>Pendaftaran Siswa Baru (SPMB)</h1>
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
      <div class="card-body">
        <form method="POST" action="{{ route('spmb.store') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Telepon</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Asal Sekolah</label>
            <input type="text" name="school" class="form-control" value="{{ old('school') }}">
          </div>
          <div class="mb-3">
            <label class="form-label">Catatan</label>
            <textarea name="notes" class="form-control" rows="4">{{ old('notes') }}</textarea>
          </div>
          <button class="btn btn-primary">Kirim Pendaftaran</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
