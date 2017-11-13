@extends('layouts.html_base')
@section('titulo')
  <title>Actores</title>
@endsection

@section('cuerpo')
    @forelse ($actores as $actor)
      <table>
        <td>
          {{ $actor->first_name }},
          {{ $actor->last_name }}
        </td>
        </table>
    @empty
      {{ "No hay Actores Disponibles" }}
    @endforelse
      <select class="" name="">
          @forelse ($peliculas as $pelicula)
              <option value="">
                {{ $pelicula->title }}
              </option>
          @empty

          @endforelse
      </select>

@endsection
