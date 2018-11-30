<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViajeroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
        return true; //la coloco en true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
        return [
          //me verifica si la cedula ya ha sido registrada
          'cedula' => 'required|min:5|max:20|unique:viajero',
          'nombre' => 'required|min:3|max:100',
          'direccion' => 'required|min:3|max:100', 
          'telefono' => 'required|min:7|max:15',
          
        ];
    }


    
}
