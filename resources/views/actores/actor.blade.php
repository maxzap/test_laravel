@extends('layouts.html_base')
@section('titulo')
  <title>Actor</title>
@endsection
<a href="javascript: history.go(-1)">Regresar</a>
<a href="{{ route('listado_actores')}}">Listado Actores</a>
<a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>
@section('cuerpo')

      {{ $actor->first_name}}
      {{ $actor->last_name}}
      <br>
      <form class="" action="{{ route('form_editActor', $actor) }}" method="get">
        {{ csrf_field() }}
        <button type="submit" name="update">Editar</button>
      </form>
      <br>
      <table border="1" width='90%'>
          <tr>
            @foreach ($actor->peliculas as $pelicula)
              <br>
                <tr>
                  <td>{{ $pelicula->title }}</td>
                  <td>{{ $pelicula->rating }}</td>
                  <td>{{ $pelicula->awards }}</td>
                </tr>
            @endforeach
          </tr>
      </table>
@endsection
