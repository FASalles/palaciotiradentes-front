<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GroupTourRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'fullNameResponsible' => 'required',
            'email' =>'required',
            'emailConfirmation' =>'required',
            'visitingDate' => 'required',
            'visitingHour' => 'required',

            'recaptcha' =>'required',
        ];
    }

    public function messages()
    {
        Return [
            'fullNameResponsible.required' => 'O campo "Nome completo da pessoa responsável" é obrigatório',
            'visitingDate.required' => 'O campo "Dia da Visita" é obrigatório',
            'visitingHour.required' => 'O campo "Horário da Visita" é obrigatório',
            'email.required' => 'O campo "E-mail" é obrigatório',
            'emailConfirmation.required' => 'O campo "Confirmação do E-mail" é obrigatório',
        ];
    }
}
