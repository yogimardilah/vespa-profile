@extends('admin.layouts.app')

@section('title','Galleries')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Galleries</h2>
  <a href="{{ route('admin.galleries.create') }}" class="btn btn-success">Add Image</a>
</div>

<div class="row">
  @foreach($items as $it)
    <div class="col-sm-6 col-md-4 mb-3">
      <div class="card">
        @if($it->image)
          <img src="{{ $it->image }}" class="card-img-top" alt="">
        @endif
        <div class="card-body">
          <h5 class="card-title">{{ $it->title }}</h5>
          <p class="card-text">{{ $it->caption }}</p>
          <a href="{{ route('admin.galleries.edit', $it) }}" class="btn btn-sm btn-primary">Edit</a>
          <form action="{{ route('admin.galleries.destroy', $it) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  @endforeach
</div>

{{ $items->links() }}

@endsection
