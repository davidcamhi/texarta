<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlider extends FormRequest
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
            'img'=>'required|file|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre de la slide es necesario.',
            'img.required' => 'Debe elegir una imagen.',
            'img.file' => 'Debe elegir un archivo.',
            'img.image' => 'El archivo debe ser una imagen.',

        ];
    }
}
