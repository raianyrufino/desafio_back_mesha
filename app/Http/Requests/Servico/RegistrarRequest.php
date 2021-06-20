<?php

namespace App\Http\Requests\Servico;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\BaseRequest;

class RegistrarRequest extends BaseRequest
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
            'nome' => 'required', 
            'valor' => 'required', 
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'O atributo :attribute é obrigatório.',
        ];
    }
}
