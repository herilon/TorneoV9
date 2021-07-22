<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Torneo - @yield('title')</title>
  </head>
  <body>
    <div class="container">
        @include('partials.navbar')
        @yield('content')
    </div>
  </body>
</html>
