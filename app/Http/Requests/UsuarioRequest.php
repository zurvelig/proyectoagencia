<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*authorize este es un método opcional donde colocamos la lógica para la autorización del usuario que devolverá true si el usuario está autorizado para hacer la solicitud y false en caso contrario. Si se decide dejar la lógica de autorización en otra parte de la aplicación, simplemente se devuelve true */
        return true; //la coloco en true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /*  VALIDACION DE CAMPOS AL REGISTRAR USUARIO -  SE MUESTRAN LOS MSJ PREDETERMINADOS DE LARAVEL*/
        /*rules método que devuelve un array con las reglas de validación que serán aplicadas.*/
        /*validando los campos al crear usuario, esta clase la llamo en el controlador*/

        return [
          'nombres' => 'required|min:3|max:100',
          'apellidos' => 'required|min:3|max:100',
          //'cedula' => 'required|min:5|max:100|unique:usuario,cedula',
          //'cedula' => 'required|min:5|max:100|unique:usuario,cedula,'.$this->get('id'),
          //me verifica si la cedula ya ha sido registrada
          'cedula' => 'required|min:5|max:15|unique:usuario', 
          'correo' => 'required|min:5|max:50',
          'empresa' => 'required|min:3|max:50',
          'telefono' => 'required|min:7|max:15',
          'nombre_usu' => 'required|min:3|max:50',
          'clave' => 'required|min:6|max:8',
          'repetir_clave' => 'required|min:6|max:8|same:clave'
        ];
    }


    
}
