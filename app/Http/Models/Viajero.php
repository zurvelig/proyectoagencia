<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Viajero extends Model implements AuthenticatableContract
{
    use Authenticatable;
 

    //enlazamos el modelo con la tabla de la bd
    protected $table = 'viajero';


    protected $fillable = ['cedula', 'nombre', 'direccion', 'telefono'];
  
    public $timestamps = false;

    public function viajero()
    {
        return $this->hasMany('App\Http\Models\Viajero');
    }

    public function scopeId($query, $id){
  		return $query->where('id',$id);
  	}
   
}
