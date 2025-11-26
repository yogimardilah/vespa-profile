@extends('admin.layouts.app')

@section('title','Create Page')

@section('content')
<h2>Create Page</h2>
<form method="POST" action="{{ route('admin.pages.store') }}" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Excerpt</label>
    <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt') }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Body</label>
    <textarea name="body" class="form-control tinymce" rows="8">{{ old('body') }}</textarea>
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
