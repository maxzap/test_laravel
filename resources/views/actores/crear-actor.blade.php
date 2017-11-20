@extends('layouts.html_base')
@section('titulo')
  <title>Crear Actor</title>
@endsection
<a href="javascript: history.go(-1)">Regresar</a>
<a href="{{ route('listado_actores')}}">Listado Actores</a>
<a href="{{ route('listado_peliculas')}}">Listado Peliculas</a>

@section('cuerpo')
  <p>Crear Actor :</p>
  <ul>
  @if ($errors)
    @foreach ($errors->All() as $error)
      <li>{{ $error }}</li>
    @endforeach
  @endif
</ul>

<div class="">
  <form class="" action="{{route('crearActor')}}" method="post">
    {{ csrf_field() }}
    @include('actores._form-actor')
    <div class="">
      <br>
      <button type="submit" name="crear">Crear</button>
    </div>
  </form>
</div>
@endsection
