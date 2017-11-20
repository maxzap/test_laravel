@extends('layouts.html_base')
      @section('titulo')
        <title>Agregar Pelicula</title>
      @endsection
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
