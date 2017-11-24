@extends('layouts.html_base')
@section('titulo')
  <title>Peliculas</title>
@endsection
<a href="javascript: history.go(-1)">Regresar</a>
<a href="{{ route('listado_actores')}}">Listado Actores</a>
<a href="{{ route('form_crearPelicula') }}">Crear Pelicula</a>
@section('cuerpo')
  @include('peliculas._form-buscar-pelicula')

  {{-- @if (@isset($id))
  {{ $id }}
@endif
@if (@isset($resultados))
@forelse ($resultados as $key => $value)
{{ $value }}
@empty
{{ "no hay resultados" }}
@endforelse
@endif --}}
@forelse ($peliculas as $pelicula)
  <table border='1' width='90%'>
    <tr>
      <td><a href="{{route('detalle_pelicula', $pelicula)}}">{{ $pelicula->title }}</a></td>
      <td width='40px'>{{ $pelicula->rating }}</td>
      <td width='40px'>{{ $pelicula->awards }}</td>
    </tr>
  </table>
@empty
  {{ "No hay peliculas disponibles" }}
@endforelse

@endsection
