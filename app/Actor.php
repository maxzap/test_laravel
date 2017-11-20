<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';
    protected $fillable = ['first_name', 'last_name'];

    public function getNombreCompleto()
    {
      # code...
    }
    public function peliculas()
    {
      return $this->belongsToMany(Pelicula::class, 'actor_movie', 'actor_id', 'movie_id');
    }
}
