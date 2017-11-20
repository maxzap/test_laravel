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
      return view('actores.actores', compact('actores'));
    }
    public function show($id)
    {
      $actor = Actor::find($id);

      $peliculas =  $actor->peliculas();

      return view('actores.actor', compact('actor', 'peliculas'));
    }
    public function search(Request $request)
    {
      $actor = $request->input('actor');
      $actores = Actor::where('first_name', 'like', $actor . '%')->get();
      return view('actores.actores', compact('actores'));
    }
}
