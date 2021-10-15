<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    public $timestamps = false;

    
    public function setPasswordAttribute($contraseña){
        $this->attributes['contraseña'] = bcrypt($contraseña);
    }
}
