<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function buscarPeliculasId($id)
    {
        return view('home')->with('id', $this->peliculas[$id]);
    }

    public function buscarPeliculasNombre($nombre)
    {
        //   foreach ($peliculas as $pelicula => $value) {
        //       busca una palabra en un array y devuelve otro array con coincidencias
        //       $example = array('An example','Another example','Last example');
        //       $searchword = 'last';
        //       $matches = array_filter($example, function ($var) use ($searchword) {
        //           return preg_match("/\b$searchword\b/i", $var);
        //       });
        // }

        $resultados = array();
        foreach ($this->peliculas as $pelicula => $value) {
            if (preg_match("/\b$nombre\b/i", $value)) {
                $resultados[$pelicula] = $value;
            }
        }

        if (empty($resultados)) {
            $retVal = [
                0 => "no hay resultados"
              ];
        } else {
            $retVal = $resultados;
        }
        
        return view('home')->with('resultados', $retVal);
    }
}
