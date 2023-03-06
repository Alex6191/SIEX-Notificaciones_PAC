<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    //Relación uno a uno
    public function licencia()
    {

        return $this->belongsTo('App\Models\Licencia');
    }

    //Relacion muchos a muchos
    public function usuario(){
        return $this->belongsToMany('App\Models\User');
    }
}
