<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HashDocumento extends Model
{
    use HasFactory;

    //Relación uno a uno
    public function documento()
    {

        return $this->hasOne('App\Models\Documento');
    }
}
