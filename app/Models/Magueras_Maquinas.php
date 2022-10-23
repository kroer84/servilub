<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magueras_Maquinas extends Model
{
    use HasFactory;

    protected $table = 'manguera_maquina';

    public function maquina(){
        return $this->belongsTo('App\Models\Maquina');
    }

    public function manguera(){
        return $this->belongsTo('App\Models\Manguera');
    }

    
}
