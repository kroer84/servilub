<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    public function mangueras(){
        return $this->belongsToMany('App\Models\Manguera');
    }

    public function intalaciones(){
        return $this->hasMany('App\Models\Magueras_Maquinas')->orderBy('instalacion');
    }
}
