<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganismoEmisorRaiz extends Model
{
    use HasFactory;

     //Relación uno a muchos
     public function organismoEmisor(){
        return $this->hasMany('App\Models\OrganismoEmisor');
    }
}
