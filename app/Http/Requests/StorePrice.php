<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrice extends FormRequest
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
            'category_id'=>'required',
            'product_id'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Díganos su nombre.',
            'email.required' => 'Una dirección de e-mail es necesaria.',
            'email.email' => 'Asegúrese de ingresar una dirección email válida.',
            'category_id.required' => 'Elija una línea.',
            'product_id.required' => 'Elija un color.',

        ];
    }
}
