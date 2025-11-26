@extends('admin.layouts.app')

@section('title','Edit News')

@section('content')
<h2>Edit News</h2>
<form method="POST" action="{{ route('admin.news.update', $news) }}" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Excerpt</label>
    <input type="text" name="excerpt" class="form-control" value="{{ old('excerpt', $news->excerpt) }}">
  </div>
  <div class="mb-3">
    <label class="form-label">Body</label>
    <textarea name="body" class="form-control" rows="6">{{ old('body', $news->body) }}</textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="image" class="form-control">
    @if($news->image)
      <div class="mt-2"><img src="{{ $news->image }}" alt="" style="max-width:180px"></div>
    @endif
  </div>
  <div class="mb-3">
    <label class="form-label">Published At</label>
    <input type="datetime-local" name="published_at" class="form-control" value="{{ optional($news->published_at)->format('Y-m-d\TH:i') }}">
  </div>
  <button class="btn btn-primary">Update</button>
</form>
@endsection
