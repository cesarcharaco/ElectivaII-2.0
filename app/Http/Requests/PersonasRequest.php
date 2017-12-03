<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => 'required',
            'apellidos' => 'required',
            'nacionalidad' => 'required',
            'cedula' => 'required|digits_between:6,8|numeric'
        ];
    }

    public function messages()
    {
        return [
            'nombres.required'      => 'Debe ingresar los nombres de la persona',
            'apellidos.required'    => 'Debe ingresar los apellidos de la persona',
            'nacionalidad.required' => 'Debe seleccionar una nacionalidad',
            'cedula.reuired' => 'Debe ingresar la cédula de la persona',
            'cedula.digits_between' => 'La cédula debe contener entre 6 y 8 dígitos',
            'cedula.numeric' => 'La cédula debe contener sólo números'
  
        ];
    }
}
