<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nueva Pelicula</title>
  </head>
  <body>
    @if (@isset($pelicula))
      {{ $pelicula }}
    @endif
  </body>
</html>
