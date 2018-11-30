<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\views\home; //la vista donde esta el registrar
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Http\Models\Usuario;
use Illuminate\Support\Facades\Input;



class ControladorLogin extends Controller
{
	public function home()
    {
       return view('home');
    }

    //funcion login
     public function login(LoginRequest $request)
    {
      //$nombre_usu = Input::get('nombre_usu');
      //$clave = Input::get('clave');
   
       /*if (Auth::attempt(['nombre_usu' => $request->$nombre_usu, 'clave' => $request->$clave])) {       
       	return redirect()->back()->with('msg1', 'Inicio correcto');
       }
       	return redirect()->back()->with('msg2', 'Datos incorrectos, vuelve a intentarlo.');*/


        $credentials = [
          'nombre_usu' => Input::get('nombre_usu'),
          'password' => Input::get('clave')
        ];

        if(Auth::attempt($credentials)) {
          return redirect('registroViajero')->with('msg1', 'Inicio correcto');
          //return 'success';
        }
        else {
          return redirect()->back()->with('msg2', 'Datos incorrectos, vuelve a intentarlo.');
          //return 'auth failed';
        } 
    }
       

    }

    //funcion login
     /*public function login(LoginRequest $request)
    {
       $credentials = $request->only('nombre_usu', 'clave');
       	 
       if (Auth::attempt($credentials)) {
       	return 'listo';//redirect()->intended('welcome');
       }
       return 'Error en la autenticación';

    }*/
