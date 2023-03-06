<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'codigo', 'fechaInicio', 'fechaFin'];

    //Relación uno a uno
    public function cliente()
    {

        return $this->hasOne('App\Models\Cliente');
    }
}
