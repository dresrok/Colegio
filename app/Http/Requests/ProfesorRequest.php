<?php

namespace Colegio\Http\Requests;

use Colegio\Http\Requests\Request;

class ProfesorRequest extends Request
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
        switch ($this->method()) {
            case 'POST':
                return [
                    'nombre' => 'required|regex:/^[\pL\s\-]+$/u|between:4,255',
                    'email' => 'required|email|unique:profesores',
                    'telefono' => 'digits_between:7,15'
                ];
                break;
            case 'PUT':
                return [
                    'nombre' => 'required|regex:/^[\pL\s\-]+$/u|between:4,255',
                    'email' => 'required|email|unique:profesores,id,' . $this->get('id'),
                    'telefono' => 'digits_between:7,15'
                ];
                break;
        }        
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
            'nombre.regex' => 'El campo nombre sólo puede contener letras.',
            'nombre.between' => 'El campo nombre debe tener entre :min y :max caracteres.',
            'email.required' => 'El campo email es obligatorio.',
            'email.email' => 'El campo email no es una dirección de e-mail válida.',
            'email.unique' => 'Este email ya está en uso.',    
            'telefono.digits_between' => 'El campo teléfono debe contener entre :min y :max dígitos.'
        ];
    }
}
