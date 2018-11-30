<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ViajeRequest extends FormRequest
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
          'codigo' => 'required|min:3|max:20|unique:viaje',
          'num_plaza' => 'required|min:1|max:20',
          'cod_destino' => 'required', 
          'cod_origen' => 'required',
          'precio' => 'required|min:3|max:20',
          'ced_viajero' => 'required',

        ];
    }


    
}
