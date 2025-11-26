@extends('admin.layouts.app')

@section('title','Submission Detail')

@section('content')
<h2>Submission #{{ $item->id }}</h2>
<dl class="row">
  <dt class="col-sm-3">Name</dt><dd class="col-sm-9">{{ $item->name }}</dd>
  <dt class="col-sm-3">Email</dt><dd class="col-sm-9">{{ $item->email }}</dd>
  <dt class="col-sm-3">Phone</dt><dd class="col-sm-9">{{ $item->phone }}</dd>
  <dt class="col-sm-3">School</dt><dd class="col-sm-9">{{ $item->school }}</dd>
  <dt class="col-sm-3">Notes</dt><dd class="col-sm-9">{{ $item->notes }}</dd>
  <dt class="col-sm-3">Status</dt><dd class="col-sm-9">{{ $item->status }}</dd>
</dl>

@endsection
