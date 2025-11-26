@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
<div class="row">
  <div class="col-md-8">
    <h2>Dashboard</h2>
    <p>Selamat datang, {{ session('admin_user', 'Admin') }}.</p>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="{{ route('admin.news.index') }}">Manage News</a></li>
          <li><a href="{{ route('admin.pages.index') }}">Manage Pages</a></li>
          <li><a href="{{ route('admin.galleries.index') }}">Manage Gallery</a></li>
          <li><a href="{{ route('admin.spmb.index') }}">SPMB Submissions</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
