<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcusePdf extends Model
{
    use HasFactory;

    //Relación uno a muchos (inversa)
    public function acuse(){
        return $this->belongsTo('App\Models\Acuse');
    }
}
