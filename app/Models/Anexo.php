<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    use HasFactory;

     //Relación uno a muchos (inversa)
     public function peticionAcceso(){
        return $this->belongsTo('App\Models\PeticionAcceso');
    }

    //Relación uno a muchos
    public function documentoAnexo(){
        return $this->hasMany('App\Models\DocumentoAnexo');
    }
}
