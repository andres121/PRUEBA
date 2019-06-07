<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
  protected $table = "ciudads";

  protected $fillable = ['ciu_id','municipio','departamento_id'];

    public static function ciudades($id){
     return Ciudad::where('departamento_id','=',$id)
     ->get();
 }
}
