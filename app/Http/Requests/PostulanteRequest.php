<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulanteRequest extends FormRequest
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
            //
            'certificadoNacimiento'=>'required|string',
            'tituloBachiller'=>'required|string',
            'depositoBancario'=>'required|numeric',

            'ci'=>'required|unique:users,usuario',
            'expedido'=>'required',
            'aPaterno'=>'required|alpha',
            'aMaterno'=>'alpha|nullable',
            'nombre'=>'required|string',
            'fechaNacimiento'=>'required|date',
            'genero'=>'required',
            'estadoCivil'=>'required',
            'correo'=>'required|email',
            'direccion'=>'required|string',
            'telefono'=>'digits:7|nullable',
            'celular'=>'required|digits:8',

            'carrera'=>'required',
            'turno'=>'required',
        ];
    }
}
