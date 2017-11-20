<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
    private $peliculas;

    public function __construct()
    {
        $this->peliculas = [
      1 => "Toy​ ​ Story",
      2 => "Buscando​ ​ a ​ ​ Nemo",
      3 => "Avatar",
      4 => "Star​ ​ Wars:​ ​ Episodio​ ​ V",
      5 => "Up",
      6 => "Mary​ ​ and​ ​ Max",
      7 => "Mad Max"
    ];
    }
    public function directory(){
      $peliculas = Pelicula::All();
      return view('peliculas.peliculas', compact('peliculas'));
    }

    public function buscarPeliculasId($id)
    {
        // return view('peliculas.peliculas')->with('id', $this->peliculas[$id]);
        $pelicula = Pelicula::find($id);
        $actores = $pelicula->actores();
        return view('peliculas.pelicula', compact('pelicula', 'actores'));
    }

    public function buscarPeliculasNombre(Request $request)
    {
        //   foreach ($peliculas as $pelicula => $value) {
        //       busca una palabra en un array y devuelve otro array con coincidencias
        //       $example = array('An example','Another example','Last example');
        //       $searchword = 'last';
        //       $ees = array_filter($example, function ($var) use ($searchword) {
        //           return preg_match("/\b$searchword\b/i", $var);
        //       });
        // }

                      // $resultados = array();
                      // foreach ($this->peliculas as $pelicula => $value) {
                      //     if (preg_match("/\b$nombre\b/i", $value)) {
                      //         $resultados[$pelicula] = $value;
                      //     }
                      // }
        // if (empty($resultados)) {
        //     $retVal = [
        //         0 => "no hay resultados"
        //       ];
        // } else {
        //     $retVal = $resultados;
        // }


        // return view('peliculas.peliculas')->with('resultados', $resultados);
        $pelicula = $request->input('pelicula');
        $peliculas = Pelicula::where('title', 'like', $pelicula . '%')->get();
        return view('peliculas.peliculas', compact('peliculas'));

    }
    public function agregarPeliculaForm()
    {
      $pelicula = new Pelicula();
      return view('peliculas.agregarPelicula', compact('pelicula'));
    }
    public function agregarPelicula(Request $request)
    {
      $this->validate(
        $request,
      [
        'title' => 'required|unique:movies',
        'rating' => 'required|numeric|between:0,10',
        'awards' => 'required|numeric',
        'release_date' => 'required',

      ]);
      $pelicula = new Pelicula($request->All());
      // $this->peliculas[] = $request['titulo'];
      // $lista = $this->peliculas;
      $pelicula->save();
      return redirect(route('listado_peliculas'));
      // return view('peliculas.nuevaPelicula', compact('lista'));
    }

}
