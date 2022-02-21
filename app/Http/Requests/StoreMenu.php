<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenu extends FormRequest
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
            
                "dianumero"=>'required',
                "dianombre"=>'required|max:10',
                "almuerzo"=>'required',
                "cena"=>'required'
        
        ];
    }

    public function messages()
    {
        return[
            'dianumero.required' => 'Selecciona una fecha',
            'dianombre.required' => 'Selecciona un dia',
            'almuerzo.required' => 'Complete el campo "Almuerzo"',
            'cena.required' => 'Complete el campo "Cena"'
        ];
    }
}
