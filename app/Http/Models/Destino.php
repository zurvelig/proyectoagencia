<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Destino extends Model implements AuthenticatableContract
{
    use Authenticatable;
 

    //enlazamos el modelo con la tabla de la bd
    protected $table = 'destino';

    //indicamos con la propiedad fillable los campos que pueden ser modifcados en la base de datos

    protected $fillable = ['codigo','nombre'];
  
    //relacion con la tabla
    public function viajero()
    {
        return $this->hasMany('App\Http\Models\Viajero');
    }

   
}
