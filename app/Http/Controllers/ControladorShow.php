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




class ControladorShow extends Controller
{
	public function editarviajero()
    {	
    	$viajeros = Viajero::all();
    	//$viajeros = Viajero::find($id);
    	
    	return view('show', compact('viajeros'));

    }  

  
	      
	
}