<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
  protected $table = "departamentos";

  protected $fillable = ['dep_id','departamento'];

}
