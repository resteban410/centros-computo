<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UsuarioModel extends Authenticatable
{
    protected $table = 'users';
    public $timestamps = false;


    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
}
