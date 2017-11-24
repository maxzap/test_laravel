@extends('layouts.html_base')
      @section('titulo')
        <title>Agregar Pelicula</title>
      @endsection
      <a href="javascript: history.go(-1)">Regresar</a>
      <a href="{{ route('listado_actores')}}">Listado Actores</a>
      <a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>
      @section('cuerpo')
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        @include('peliculas._form')
      @endsection
