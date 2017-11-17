@extends('layouts.html_base')
@section('titulo')
  <title>Actores</title>
@endsection

@section('cuerpo')
  @include('actores._form-buscar')
  <br>
    @forelse ($actores as $actor)
      <table border="1" width='90%'>
        <td>
          <a href="{{route('detalle_actor',$actor)}}">
            {{ $actor->first_name }}, {{ $actor->last_name }}
          </a>
        </td>
        </table>
    @empty
      {{ "No hay Actores Disponibles" }}
    @endforelse
    @include('actores._form-limpiar')

@endsection
