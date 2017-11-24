@extends('layouts.html_base')
@section('titulo')
  <title>Actores</title>
@endsection
    <a href="javascript: history.go(-1)">Regresar</a>
    <a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>
    <a href="{{ route('form_crearActor') }}">Crear Actor</a>
@section('cuerpo')
  @include('actores._form-buscar-actor')
  <br>
    @forelse ($actores as $actor)
      <table border="1" width='90%'>
        <tr>
          <a href="{{route('detalle_actor',$actor)}}">
            {{ $actor->first_name }}, {{ $actor->last_name }}
          </a>
        </tr>
        </table>
    @empty
      {{ "No hay Actores Disponibles" }}
    @endforelse
    <br>
    @include('actores._form-limpiar')

@endsection
