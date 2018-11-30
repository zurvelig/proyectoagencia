<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Viaje extends Model implements AuthenticatableContract
{
    use Authenticatable;
 

    //enlazamos el modelo con la tabla de la bd
    protected $table = 'viaje';

    //protected $primarykey = 'id';

    //indicamos con la propiedad fillable los campos que pueden ser modifcados en la base de datos

    protected $fillable = ['codigo', 'num_plaza', 'cod_destino', 'cod_origen','precio','ced_viajero'];
  
    public $timestamps = false;
   
}
