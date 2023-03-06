<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

     //Relación uno a muchos
     public function envio(){
        return $this->hasMany('App\Models\Envio');
    }
}
