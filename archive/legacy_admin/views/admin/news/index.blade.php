@extends('admin.layouts.app')

@section('title','News')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>News</h2>
  <a href="{{ route('admin.news.create') }}" class="btn btn-success">Create News</a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Published</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($news as $item)
    <tr>
      <td>{{ $item->id }}</td>
      <td>{{ $item->title }}</td>
      <td>{{ optional($item->published_at)->format('Y-m-d') ?? '-' }}</td>
      <td>
        <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-sm btn-primary">Edit</a>
        <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Hapus?')">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $news->links() }}

@endsection
