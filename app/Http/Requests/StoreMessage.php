<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessage extends FormRequest
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
            'email' => 'required|email',
            'message'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Díganos su nombre.',
            'email.required' => 'Una dirección de e-mail es necesaria.',
            'email.email' => 'Asegúrese de ingresar una dirección email válida.',
            'message.required' => 'Especifique su mensaje.',

        ];
    }
}
