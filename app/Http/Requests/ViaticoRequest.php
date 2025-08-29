<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class ViaticoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request)
    {
        return [
            'fecha_registro'=>'required',
            'hoja_ruta'=>'required',
            'ci'=>'required',
            'origen'=>'required',
            'salida'=>'required',
            'hora_salida'=>'required',
            'destino'=>'required',
            'retorno'=>'required',
            'hora_retorno'=>'required',
            'via'=>'required',
            'descripcion'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'fecha_registro.required' => 'El ingreso de fecha de registro es obligatorio.',
            'hoja_ruta.required' => 'El ingreso de hoja de ruta es obligatorio.',            
            'ci.required'   => 'El ingreso de ci es obligatorio.',
            'origen.required'   => 'El ingreso de origen es obligatorio.',
            'salida.required'   => 'El ingreso de salida es obligatorio.',
            'hora_salida.required'   => 'El ingreso de hora es obligatorio.',
            'destino.required'   => 'El ingreso de destino es obligatorio.',
            'retorno.required'   => 'El ingreso de retorno es obligatorio.',
            'hora_retorno.required'   => 'El ingreso de hora de retorno es obligatorio.',
            'via.required'   => 'El ingreso de via es obligatorio.',
            'descripcion.required'   => 'El ingreso de descripción es obligatorio.',
        ];
    }
}
