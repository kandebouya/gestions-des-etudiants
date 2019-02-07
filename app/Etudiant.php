<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $key=['id'];
    protected $fillable = ['matricule','firstname','lastname','adresselocal','niveau_id','birthday','age','email','tel'];
    protected $dates = ['created_at','updated_at'] ;


    public function niveau()
    {
        return $this->belongsTo('App\Niveau','niveau_id');
    }

}
