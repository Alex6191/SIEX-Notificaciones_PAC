<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoAnexo extends Model
{
    use HasFactory;

     //Relación uno a muchos (inversa)
     public function anexo(){
        return $this->belongsTo('App\Models\Anexo');
    }
}
