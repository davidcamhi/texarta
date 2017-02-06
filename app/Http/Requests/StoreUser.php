<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'privilege' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe poner el nombre',
            'email.required' => 'Debe poner su email',
            'email.email' => 'Su email no es válido',
            'email.unique' => 'Ya se encuentra registrado en nuestra base de datos',
            'password.required' => 'Debe poner su contraseña',
            'privilege.required' => 'Debe indicar si es administrador',
        ];
    }
}
