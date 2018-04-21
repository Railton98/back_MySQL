<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Perfil;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = ['nome', 'idade', 'perfil', 'id_perfil'];

    public function perfils()
    {
      return $this->hasMany('App\Perfil');
    }
}
