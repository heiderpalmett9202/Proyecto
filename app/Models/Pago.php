<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function tipopago(){
        return $this->belongsTo('App\Models\Tipopago');//relacion muchos a uni con ejemplar
    }
}

