<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acuse extends Model
{
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function envio(){
        return $this->belongsTo('App\Models\Envio');
    }

    //Relación uno a uno
    public function identificadorAcusePdf()
    {
        return $this->belongsTo('App\Models\IdentificadorAcusePdf');
    }

     //Relacion uno a muchos
     public function acusePdf(){
        return $this->hasMany('App\Models\AcusePdf');
    }
}
