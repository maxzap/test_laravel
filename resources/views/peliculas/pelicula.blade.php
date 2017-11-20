@extends('layouts.html_base')
@section('titulo')
  <title>Actor</title>
@endsection
    <a href="javascript: history.go(-1)">Regresar</a>
    <a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>
    <a href="{{ route('listado_actores')}}">Listado Actores</a>
@section('cuerpo')

  <p>{{ $pelicula->title }}</p>
    <ul>
        <li>{{ "Premios : " . $pelicula->awards }}</li>
        <li>{{ "Rating : " . $pelicula->rating }}</li>
    </ul>
  <p>{{ "Casting: "}}</p>
    <ul>
      @foreach ($pelicula->actores as $actor)
        <li>{{ $actor->first_name ." ". $actor->last_name }}</li>
      @endforeach
    </ul>
@endsection
