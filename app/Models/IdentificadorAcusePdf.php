<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdentificadorAcusePdf extends Model
{
    use HasFactory;

    //Relación uno a uno
    public function acuse()
    {
        return $this->hasOne('App\Models\Acuse');
    }
}
