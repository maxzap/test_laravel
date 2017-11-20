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
    public function agregarActorForm()
    {
      $actor = new Actor();
      return view('actores.crear-actor', compact('actor'));
    }

    public function agregarActor(Request $request)
    {
      $this->validate(
        $request,
        [
          'first_name' => 'required',
          'last_name' => 'required|unique:actors'
          // 'last_name' => 'required|unique:actors,'.' last_name'.', NULL, id, first_name,'. $request->input('first_name')
        ]
      );
      $actor = new Actor($request->All());
      $actor->save();

      return redirect(route('listado_actores'));

    }
}
