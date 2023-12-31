<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','home')</title>
    <link href="/boostrap/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body class="d-flex flex-column min-vh-100">

    @include('part.navbar')
    @yield('container')
    @include('part.footer')

    <script src="/boostrap/bootstrap.bundle.min.js" ></script>
  </body>
</html>
