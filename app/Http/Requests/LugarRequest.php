<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LugarRequest extends FormRequest
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
            'descripcion'=>'required',
            'ciudad'=>'required',
            'frontera'=>'required',
            'estado'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'El ingreso de descripción es obligatorio.',
            'ciudad.required' => 'El ingreso de ciudad es obligatorio.',
            'frontera.required' => 'El ingreso de frontera es obligatorio.',
            'estado.required'   => 'El ingreso de estado es obligatorio.',
        ];
    }
}
