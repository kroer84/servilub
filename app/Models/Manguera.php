<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manguera extends Model
{
    use HasFactory;

    public function maquinas(){
        return $this->belongsToMany('App\Models\Maquina');
    }

}

