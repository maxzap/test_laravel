@extends('layouts.html_base')
@section('titulo')
  <a href="javascript: history.go(-1)">Regresar</a>
  <a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>
  <a href="{{ route('form_crearActor') }}">Crear Actor</a>
@endsection

@section('cuerpo')
  @if (count($errors) > 0)
    <p>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </p>
  @endif

  <form class="" method="PUT" action="{{ route('editActor', $actor) }}">
    {{ method_field('PUT') }}
    {{ csrf_field() }}
    @include('actores._form-actor')
    <button type="submit">Guardar</button>
  </form>
@endsection
