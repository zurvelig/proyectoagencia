<?php
/**
 * Ejemplo
 *
 * Created by PhpStorm.
 * User: ing-web1
 * Date: 02/07/18
 * Time: 10:37 AM
 */

namespace App\Http\Controllers;

use App\views\home; //la vista donde esta el registrar
use App\views\registrar; //la vista donde esta el registrar
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Http\Models\Usuario;
use App\Http\Requests\UsuarioRequest;


class ControladorUsuario extends Controller
{
    /**llamar a la vista home la que hice con blade - bootsrap*/
     public function home()
    {
       return view('home');
    }


    //funcion registrar
    public function registro()
    {
       return view('home');
    }


    //funcion guardar
    public function store(UsuarioRequest $request)
    {

        $usuario = new Usuario;

        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->cedula = $request->cedula;
        $usuario->correo = $request->correo;
        $usuario->empresa = $request->empresa;
        $usuario->telefono = $request->telefono;
        $usuario->nombre_usu = $request->nombre_usu;
        //$usuario->clave = $request->clave;
        $usuario->clave = bcrypt($request->clave); //bcrypt es ara encriptar la clave en la bd
        $usuario->repetir_clave = bcrypt($request->repetir_clave);
        
        //creamos variable de desicion exito para saber si se guarda o no el registro
        if ($usuario->save()) {
            //luego de guardar redirecciona al mismo lugar y muestra un msj 
            return redirect()->back()->with('exito', 'Registro exitoso'); 
        }else{
            return redirect()->back()->with('fallo', 'Error al guardar los datos'); 
        }

        
    }

    

}