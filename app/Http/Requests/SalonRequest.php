<?php

namespace Colegio\Http\Requests;

use Colegio\Http\Requests\Request;

class SalonRequest extends Request
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
            'nombre' => 'required|between:3,255',
            'numero' => 'required|digits_between:1,100',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'nombre.between' => 'El campo nombre debe tener entre :min y :max caracteres.',
            'numero.required' => 'El campo número es obligatorio.',
            'numero.digits_between' => 'El campo número debe contener entre :min y :max dígitos.'
        ];
    }
}
