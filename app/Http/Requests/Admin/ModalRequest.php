<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ModalRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullNameGuest' => 'required',
            'birthDateGuest' =>'required',
            'genderIdentityGuest' =>'required',

            'disabilityGuest' => 'required|in:yes,no',
            'tipeOfDisabilityGuest' => 'required_with:disability,yes',
        ];
    }

    public function messages()
    {
        Return [
            'fullNameGuest.required' => 'O campo "Nome Completo" é obrigatório',
            'birthDateGuest.required' => 'O campo "Data de Aniversário" é obrigatório',
            'genderIdentityGuest.required' => 'O campo "Qual seu gênero" é obrigatório',
            'disabilityGuest.required' => 'O campo "Possui Alguma Deficiência" é obrigatório',
            'typeOfDisabilityGuest[].required' => 'O campo "Tipo de Deficiência" é obrigatório',
        ];
    }
}
