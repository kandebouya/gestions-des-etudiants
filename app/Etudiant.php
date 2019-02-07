<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $key=['id'];
    protected $fillable = ['prenom','nom','adresse','dateNaissance','email','telephone','niveau_id'];
    protected $dates = ['created_at','updated_at'] ;


    public function niveau()
    {
        return $this->belongsTo('App\Niveau','niveau_id');
    }

}
