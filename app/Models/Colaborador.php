<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    public function proyectos(){
        return $this->belongsToMany('App\Models\Proyecto');//relacion muchos a uni con ejemplar
    }
    public function pago(){
        return $this->belongsTo('App\Models\Pago');//relacion muchos a uni con ejemplar
    }
}



