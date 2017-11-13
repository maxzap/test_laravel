@extends('layouts.html_base')
    @section('titulo')
      <title>Nueva Pelicula</title>
    @endsection

    @section('cuerpo')
      @forelse ($lista as $pelicula)
        {{ $pelicula }}
        <br>
      @empty
        {{ "No hay peliculas" }}
      @endforelse
    @endsection
