<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganismoEmisor extends Model
{
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function organismoEmisorRaiz(){
        return $this->belongsTo('App\Models\OrganismoEmisorRaiz');
    }

     //Relación uno a muchos
     public function envio(){
        return $this->hasMany('App\Models\Envio');
    }
}
