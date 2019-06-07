<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = ['departamento_id','ciudad_id', 'agente_id','nombre', 'cedula', 'celular', 'dirección'];
}
