@extends('admin.layouts.app')

@section('title','SPMB Submissions')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>SPMB Submissions</h2>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>School</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $it)
      <tr>
        <td>{{ $it->id }}</td>
        <td>{{ $it->name }}</td>
        <td>{{ $it->phone }}</td>
        <td>{{ $it->school }}</td>
        <td>{{ $it->status }}</td>
        <td>
          <a href="{{ route('admin.spmb.show', $it) }}" class="btn btn-sm btn-primary">View</a>
          <form action="{{ route('admin.spmb.destroy', $it) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{{ $items->links() }}

@endsection
