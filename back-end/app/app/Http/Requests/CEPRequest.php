<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CEPRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cep' => ['required', 'string', 'size:8']
        ];
    }

    public function messages(): array
    {
        return [
            'cep.required' => 'O Parâmetro CEP é obrigatório',
            'cep.string'   => 'O Parâmetro CEP deve ser uma string numérica',
            'cep.size'     => 'O Parâmetro CEP deve estar dentro dos padões estabelecidos',
        ];
    }
}
