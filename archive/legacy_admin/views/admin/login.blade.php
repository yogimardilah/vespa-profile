@extends('admin.layouts.app')

@section('title','Admin Login')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Admin Login</h4>
        <form method="POST" action="{{ route('admin.login.post') }}">
          @csrf
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ old('username') }}">
            @error('username')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            @error('password')<div class="text-danger">{{ $message }}</div>@enderror
          </div>
          <button class="btn btn-primary">Login</button>
        </form>
        @if(app()->environment('local'))
          <hr>
          <div class="small text-muted">
            Hint (local only): Default credentials are <strong>{{ env('ADMIN_USER','admin') }}</strong> / <strong>{{ env('ADMIN_PASS','password') }}</strong>.<br>
            To change, add `ADMIN_USER` and `ADMIN_PASS` to your `.env` and run `php artisan config:clear` if you cached config.
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
