<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Peliculas</title>
  </head>
  <body>
    @if (@isset($id))
      {{ $id }}
    @endif
    @if (@isset($resultados))
      @forelse ($resultados as $key => $value)
        {{ $value }}
      @empty
        {{ "no hay resultados" }}
      @endforelse
    @endif

  </body>
</html>
