<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeticionAcceso extends Model
{
    use HasFactory;
    
    //Relación uno a muchos (inversa)
    public function envio(){
        return $this->belongsTo('App\Models\Envio');
    }

    //Relación uno a muchos
    public function anexo(){
        return $this->hasMany('App\Models\Anexo');
    }

    //Relación uno a muchos
    public function documento(){
        return $this->hasMany('App\Models\Documento');
    }
}
