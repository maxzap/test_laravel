@extends('layouts.html_base')
@section('titulo')
  <title>Actor</title>
@endsection

@section('cuerpo')
  <table border="1" width='90%'>
    <td>
      {{ $actor->first_name}}
      {{ $actor->last_name}}
    </td>
    @foreach ($actor->peliculas as $pelicula)
      <td>{{ $pelicula->title }}</td>
      <td>{{ $pelicula->rating }}</td>
      <td>{{ $pelicula->awards }}</td>
    @endforeach
  </table>

@endsection
