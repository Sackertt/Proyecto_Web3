<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistasRequest extends FormRequest
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
        return [ 'user' => 'required|max:20|unique:cuentas,user',
            'password'=>'required|min:6|max:100',
            'nombre' => 'required|alpha|min:2|max:20',
            'apellido' => 'required|alpha|max:20',
        ];
    }

    public function messages():array
    {
        //'campo.regla'=>'mensaje'
        return [
            'user.required'=>'Indique el nombre del usuario',
            'user.unique'=>'Nombre de usuario en uso',
            'user.max'=>'Nombre de usuario demasiado extenso',
            'password.required'=>'Indique contraseña',
            'password.min'=>'Contraseña debe tener al menos 6 caracteres',
            'password.max'=>'>Contraseña demasiado extensa, estas bien?',
            'nombre.required'=>'Ingrese Nombre',
            'nombre.alpha'=>'Solo letras porfavor',
            'nombre.min'=>'Ingrese Nombre valido',
            'nombre.max'=>'Mucho nombre',
            'apellido.required'=>'Ingrese Apellido',
            'apellido.alpha'=>'Ingrese Apellido valido',
            'apellido.max'=>'Mucho Apellido',






        ];
    }
}
