<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $fillable = ['libelle'];
    protected $dates = ['created_at','updated_at'] ;

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

}
