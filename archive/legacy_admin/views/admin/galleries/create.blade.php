@extends('admin.layouts.app')

@section('title','Add Gallery')

@section('content')
<h2>Add Gallery Image</h2>
<form method="POST" action="{{ route('admin.galleries.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Caption</label>
    <input type="text" name="caption" class="form-control" value="{{ old('caption') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Published At</label>
    <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at') }}">
  </div>
  <button class="btn btn-primary">Save</button>
</form>
@endsection
