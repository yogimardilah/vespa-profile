<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - @yield('title','Dashboard')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/custom.css">
  <style>body{padding-top:70px}</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">Site</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">View Site</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('admin.news.index') }}">News</a></li>
          <li class="nav-item">
            <form method="POST" action="{{ route('admin.logout') }}">
              @csrf
              <button class="btn btn-sm btn-outline-light">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="container">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @yield('content')
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- TinyMCE (WYSIWYG) -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof tinymce !== 'undefined') {
        tinymce.init({
          selector: 'textarea.tinymce',
          height: 400,
          plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste help wordcount',
          toolbar: 'undo redo | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist outdent indent | link image media | removeformat | code',
          images_upload_url: '{{ route('admin.media.upload') }}',
          images_upload_credentials: true,
          automatic_uploads: true,
          relative_urls: false,
          convert_urls: false,
          headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
          },
          images_reuse_filename: true,
        });
      }
    });
  </script>
</body>
</html>
