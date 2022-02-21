<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOpcion extends FormRequest
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
            "imagen"=>'required',
            "nombre"=>'required|max:10',
            "descripcion" => 'required|max:50'
        ];
    }
    public function messages()
    {
        return[
            'imagen.required' => 'Complete el campo "Imagen" en formato de ruta',
            'nombre.required' => 'Complete el campo "Nombre"',
            'descripcion.required' => 'Complete el campo "Descripcion"'
        ];
    }
}
