<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
 

    //enlazamos el modelo con la tabla de la bd
    protected $table = 'usuario';

    //protected $primarykey = 'id';

    //indicamos con la propiedad fillable los campos que pueden ser modifcados en la base de datos

    protected $fillable = ['nombres', 'apellidos','cedula','correo','empresa','telefono','nombre_usu','clave','repetir_clave'];


    public function getAuthPassword () {

    return $this->clave;

    }

    public function setPasswordAttribute($clave)
    {
    $this->attributes['clave'] = bcrypt($clave);
    }
    

    

    //para obtener todas las filas de la tabla asociada a un modelo usaremos el método all()
    //$usuario = Usuario::all();

    //para obtener campos especificos
   /* foreach ($usuario as $usu) {
    	echo $usu->nombres;
    }*/

    //Insertar datos 
    /*añadir una entrada en la tabla de la base de datos asociada con un modelo simplemente tenemos que crear una nueva instancia de dicho modelo, asignar los valores que queramos y por último guardarlos con el método save()*/
    /*$usu = new Usu;
    $usu->nombres = 'Juan David'
    $usu->save();*/
}
