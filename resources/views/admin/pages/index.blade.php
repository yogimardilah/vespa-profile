@extends('admin.layouts.app')

@section('title','Pages')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Pages</h2>
  <a href="{{ route('admin.pages.create') }}" class="btn btn-success">Create Page</a>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Slug</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pages as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->slug }}</td>
        <td>{{ $p->title }}</td>
        <td>
          <a href="{{ route('admin.pages.edit', $p) }}" class="btn btn-sm btn-primary">Edit</a>
          <form action="{{ route('admin.pages.destroy', $p) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $pages->links() }}

@endsection
