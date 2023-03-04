<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function licencia(){
        
        //$licencia = Licencia::find($this->licencia_id);

        //return $this->belongsTo('App\Models\Licencia'); 
    }
}
