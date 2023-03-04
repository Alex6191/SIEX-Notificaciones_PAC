<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;

    protected $fillable=['id','codigo','fechaInicio','fechaFin'];

    public function cliente(){
        
        //$cliente = Cliente::where('licencia_id',$this->id)->first();

        //return $this->hasOne('App\Models\Cliente'); 
    }
}
