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
}
