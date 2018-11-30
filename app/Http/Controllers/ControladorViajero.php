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




class ControladorViajero extends Controller
{
	public function registrarviajero()
    {
    	//$viajeros = Viajero::orderBy('id','DESC')->paginate(3);
    	$viajeros = Viajero::get();

    return view('registroViajero',compact('viajeros'));

       //return view('registroViajero');
    }  

    //Registrar
	public function storeViajero(ViajeroRequest $request)
	    {
	    	$viajero = new Viajero;

	        $viajero->cedula = $request->cedula;
	        $viajero->nombre = $request->nombre;
	        $viajero->direccion = $request->direccion;
	        $viajero->telefono = $request->telefono;
	       
	              
	        //creamos variable de desicion exito para saber si se guarda o no el registro
	        if ($viajero->save()) {
	            //luego de guardar redirecciona al mismo lugar y muestra un msj 
	            return redirect()->back()->with('exito', 'Registro exitoso'); 
	        }else{
	            return redirect()->back()->with('fallo', 'Error al guardar los datos'); 
	        }

	    }


    public function show($id)
    {
    	$viajero = Viajero::find($id);

    	return View::make('show')->with('viajero', $viajero);
    }



  	public function edit($id)
    {
        $viajero = Viajero::findOrFail($id);
        
        return view('editarViajero', compact('viajero'));

    }


	/*public function update(ViajeroRequest $request, $id)
	  {
	  	Viajero::find($id);
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
	  }*/

	  /*public function update(ViajeroRequest $request,$id) 
	{
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
	}  */
	

	public function destroy($id)
    {
        //
        // Viajero::find($id)->delete();
       
       // $viajerob = Viajero::find($id);
        //$viajerob->delete();

        /*Viajero::destroy($id);
        return redirect()->route('registroViajero')->with('success','Registro eliminado con éxito');*/
    }
	   
	
}