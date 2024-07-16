<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipopago extends Model
{
    use HasFactory;
    public function pago(){
        return $this->hasmany('App\Models\Pago');//relacion muchos a uni con ejemplar
    }
}

