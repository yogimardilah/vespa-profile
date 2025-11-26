@extends('admin.layouts.app')

@section('title','Edit Page')

@section('content')
<h2>Edit Page</h2>
<form method="POST" action="{{ route('admin.pages.update', $page) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug', $page->slug) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $page->title) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Excerpt</label>
    <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $page->excerpt) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Body</label>
    <textarea name="body" class="form-control tinymce" rows="8">{{ old('body', $page->body) }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    @if($page->image)
      <div class="mt-2"><img src="{{ $page->image }}" alt="" style="max-width:200px"></div>
    @endif
  </div>
  <div class="mb-3">
    <label class="form-label">Published At</label>
    <input type="datetime-local" name="published_at" class="form-control" value="{{ optional($page->published_at)->format('Y-m-d\TH:i') }}">
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
