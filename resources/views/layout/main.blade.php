<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}"">
    <script src="{{ mix('/js/app.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">Laravel-Webpaste</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    </div>
</nav>
    </div>
    <div class="container">
    <div class="alert__group">
      @if ($success ?? '')
        <div class="alert alert-success" role="alert">
          {{ $success }}
        </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        @foreach ($errors as $error)
            <span>{{ $error }}</span>
        @endforeach
    </div>
</div>    

@endif


        @yield('main')
        </div>
</body>
</html>