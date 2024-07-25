<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CEPRequest extends FormRequest
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
            'cep' => ['required', 'string', 'size:8']
        ];
    }

    public function messages(): array
    {
        return [
            'cep.required' => 'O Parãmetro CEP é obrigatório',
            'cep.string'   => 'O Parãmetro CEP deve ser uma string numerica',
            'cep.size'     => 'O Parãmetro CEP deve estar dentro dos padões estabelecidos',
        ];
    }
}
