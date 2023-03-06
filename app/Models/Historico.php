<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    use HasFactory;

     //Relación uno a muchos (inversa)
     public function envio(){
        return $this->belongsTo('App\Models\Envio');
    }

      //Relación uno a muchos (inversa)
      public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
