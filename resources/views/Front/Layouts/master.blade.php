<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <!-- <link rel="manifest" href="/site.webmanifest"> -->
    <!-- <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5"> -->
    <meta name="msapplication-TileColor" content="#9b111e">
    <meta name="theme-color" content="#9b111e">

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