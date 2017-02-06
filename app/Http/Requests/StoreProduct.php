<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'description' => 'required',
            'category_id' => 'required',
            'color_id' => 'required',
            'main' => 'required',
            'available' => 'required',
            'image'=>'required|file|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre del color es necesario.',
            'description.required' => 'Debe poner una descripción del color..',
            'image.required' => 'Debe elegir una imágen para el color.',
            'image.file' => 'Debe elegir un archivo.',
            'category_id.required' => 'Debe seleccionar una línea.',
            'color_id.required' => 'Debe seleccionar un color.',
            'main.required' => 'Indique si es el producto principal de la línea.',
            'available.required' => 'Indique si es el producto está disponible.',
        ];
    }
}
