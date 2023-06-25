<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo'=>'required|max:20',
            'img' => 'required|image',
        ];
    }
    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'titulo.required'=>'Ingrese un titulo para su arte',
            'titulo.max'=>'Ingrese un titulo mas corto',
            'img.required'=>'Ingrese el archivo de su arte',
            'img.image'=>'Ingrese un archivo de tipo imagen(.jpg, .png, etc..)',
        ];
    }
}
