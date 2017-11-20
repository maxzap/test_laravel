<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'rating', 'release_date', 'awards'];

    public function actores()
    {
      return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }
}
