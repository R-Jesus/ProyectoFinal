<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'email'=>'required|email|string|max:255|unique:providers',
            'ruc_numbre'=>'required|string|max:11|min:11|unique:providers',
            'address'=>'nullable|string|max:255',
            'phone'=>'required|string|max:10|min:10|unique:providers',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'email.string'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electrónico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 255 caracteres',
            'email.unique'=>'Ya se encuentra registrado',

            'ruc_number.required'=>'Este campo es requerido',
            'ruc_number.string'=>'El valor no es correcto',
            'ruc_number.min'=>'Solo se permite 11 caracteres',
            'ruc_number.max'=>'Solo se permite 11 caracteres',
            'ruc_number.unique'=>'Ya se encuentra registrado',

            'address.max'=>'Solo se permite 255 caracteres',
            'address.string'=>'El valor no es correcto',

            'phone.required'=>'Este campo es requerido',
            'phone.string'=>'El valor no es correcto',
            'phone.min'=>'Solo se permite 10 caracteres',
            'phone.max'=>'Solo se permite 10 caracteres',
            'phone.unique'=>'Ya se encuentra registrado',
        ];
    }
}
