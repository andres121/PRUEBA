<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
  protected $table = "agentes";

  protected $fillable = ['age_id','cedula','nombre'];
}
