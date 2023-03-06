<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function peticion(){
        return $this->belongsTo('App\Models\Peticion');
    }

    //Relación uno a muchos (inversa)
    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

     //Relación uno a muchos (inversa)
     public function organismoEmisor(){
        return $this->belongsTo('App\Models\OrganismoEmisor');
    }
 
    //Relación uno a muchos
    public function historico(){
        return $this->hasMany('App\Models\Historico');
    }

    //Relación uno a muchos
    public function peticionAcceso(){
        return $this->hasMany('App\Models\PeticionAcceso');
    }

    //Relación uno a muchos
    public function acuse(){
        return $this->hasMany('App\Models\Acuse');
    }
}
