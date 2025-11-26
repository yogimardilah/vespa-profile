@extends('admin.layouts.app')

@section('title','Edit Gallery')

@section('content')
<h2>Edit Gallery</h2>
<form method="POST" action="{{ route('admin.galleries.update', $gallery) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $gallery->title) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Caption</label>
    <input type="text" name="caption" class="form-control" value="{{ old('caption', $gallery->caption) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    @if($gallery->image)
      <div class="mt-2"><img src="{{ $gallery->image }}" alt="" style="max-width:200px"></div>
    @endif
  </div>
  <div class="mb-3">
    <label class="form-label">Published At</label>
    <input type="datetime-local" name="published_at" class="form-control" value="{{ optional($gallery->published_at)->format('Y-m-d\TH:i') }}">
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
