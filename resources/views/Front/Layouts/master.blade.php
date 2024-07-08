<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
    @if(View::hasSection('title'))
      @yield('title') - {{ config('app.name', 'Laravel') }}
    @else
      {{ config('app.name', 'Laravel') }}
    @endif
    </title>

  @vite('resources/css/app.css')
  @yield('css')
</head>
<body class="antialiased">

    @yield('content')

    @vite('resources/js/app.js')
    @yield('js')
</body>
</html>