<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Pelicula;

use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function directory()
    {
      $actores = Actor::All();
      $peliculas = Pelicula::All();
      return view('actores.actores', compact('actores', 'peliculas'));
    }
    public function show($id)
    {
      $actor = Actor::find($id);

      $peliculas =  $actor->peliculas();

      return view('actores.actor', compact('actor', 'peliculas'));
    }
    public function search($nombre)

    {
      $actores = Actor::where('first_name', 'LIKE', '%$nombre%')->get();

      return view('actores.actores', compact('actores'));
    }
}
