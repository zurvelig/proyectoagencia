<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ViajeroRequest;
use App\views\home; //la vista donde esta el registrar
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\Http\Models\Viajero;
use Illuminate\Support\Facades\Input;




class ControladorEditarViajero extends Controller
{
	public function editarviajero()
    {	
    	$viajero = Viajero::all();
    	//$viajeros = Viajero::find($id);
    	
    	return view('editarViajero', compact('viajero'));

    }  

    public function show($viajeros)
    {	
    	$viajeros = Viajero::find($id);

    	return view('editarViajero', compact('viajeros'));
    }


    public function edit($id)
    {
        $viajero = Viajero::findOrFail($id);
        
        return view('editarViajero', compact('viajero'));
    }


    public function updateViajero(ViajeroRequest $request,$id) 
	{
		//$viajero = Viajero::find($id);

		/*$viajero->cedula = $request->get('cedula');
	    $viajero->nombre = $request->get('nombre');
	    $viajero->direccion = $request->get('direccion');
	    $viajero->telefono = $request->get('telefono');*/

	    $viajero = Viajero::FindOrFail($id);

		$viajero->cedula = $request->cedula;
	    $viajero->nombre = $request->nombre;
	    $viajero->direccion = $request->direccion;
	    $viajero->telefono = $request->telefono;

	    if ($viajero->save()) {
	            //luego de guardar redirecciona al mismo lugar y muestra un msj 
	            return redirect()->back()->with('exitoedit', 'Modificación exitosa'); 
	        }else{
	            return redirect()->back()->with('falloedit', 'Error al modificar los datos'); 
	        }
	}
	  
	      
	
}