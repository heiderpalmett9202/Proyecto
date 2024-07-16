<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function proyecto(){
        return $this->hasMany('App\Models\Proyecto');//relacion muchos a uni con ejemplar
    }
}

