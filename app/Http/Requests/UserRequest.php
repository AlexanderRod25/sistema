<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        $id = $this->route('usuario') ?? Auth::id();

        $rules= [
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($id), // Correcto, todo en array
            ],
        ];

        if ($method === 'POST') {
            $rules['password'] = 'required|min:8|confirmed'; // Requerido solo en POST (crear)
        } else if (in_array($method, ['PUT', 'PATCH'])) {
            $rules['password'] = 'nullable|min:8|confirmed'; // No obligatorio en PUT (editar)
        }

        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio.',
            'name.string' => 'El nombre debe ser una cadena de texto.',
            'name.max' => 'El nombre no puede tener mas de 255 caracteres.',

            'email.required' => 'El campo correo electronico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electronico valido.',
            'email.unique' => 'Este correo electronico ya esta registrado.',

            'password.required' => 'El campo contraseña es obligatorio.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
            'password.confirmed' => 'Las contraseñas no coinciden.'
        ];
    }
}
