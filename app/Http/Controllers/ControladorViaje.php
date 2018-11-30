<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ViajeRequest;
use App\views\home; //la vista donde esta el registrar
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Http\Models\Viaje;
use Illuminate\Support\Facades\Input;
use App\Http\Models\Destino;
use App\Http\Models\Origen;
use App\Http\Models\Viajero;



class ControladorViaje extends Controller
{
	public function registroviaje()
    {
     //para llenar el combo de destino
       $destino = Destino::all();

       //para llenar el combo de origen
       $origen = Origen::all();

       $cedula = Viajero::all();

       return view('registroViaje', compact('destino', 'origen', 'cedula'));

       //return view('registroLicita');
    }  

	public function storeViaje(ViajeRequest $request)
	    {
	        $viaje = new Viaje;

	        $viaje->codigo = $request->codigo;
	        $viaje->num_plaza = $request->num_plaza;
	        $viaje->cod_destino = $request->cod_destino;
	        $viaje->cod_origen = $request->cod_origen;
	        $viaje->precio = $request->precio;
	        $viaje->ced_viajero = $request->ced_viajero;
	       
	        //creamos variable de desicion exito para saber si se guarda o no el registro
	        if ($viaje->save()) {
	            //luego de guardar redirecciona al mismo lugar y muestra un msj 
	            return redirect()->back()->with('exito', 'Registro exitoso'); 
	        }else{
	            return redirect()->back()->with('fallo', 'Error al guardar los datos'); 
	        }

	    }
	      
	
}