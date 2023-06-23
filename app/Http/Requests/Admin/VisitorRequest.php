<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VisitorRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
//        dd($this->request);
        return [
            'visitingDate' => 'required',
            'visitingHour' => 'required',
            'fullName' => 'required',
//            'recaptcha' =>'required',
            'birthDate' =>'required',
            'genderIdentity' =>'required',

            'disability' => 'required|in:yes,no',
            'tipeOfDisability' => 'required_with:disability,yes',

            'country' =>'required|in:Brasil,França',
            'fu' =>'exclude_if:country,França|required',
            'city' =>'exclude_if:country,França|required',
            'city2' =>'exclude_if:country,Brasil|required',

            'typeOfDocument' =>'required|in:CPF,RG,Passaporte',
            'document' =>'required',
            'state' =>'exclude_if:typeOfDocument,CPF,Passaporte|required',

            'email' =>'required',
            'emailConfirmation' =>'required',
        ];
    }

    public function messages()
    {
        Return [
            'visitingDate.required' => 'O campo "Dia da Visita" é obrigatório',
            'visitingHour.required' => 'O campo "Horário da Visita" é obrigatório',
            'fullName.required' => 'O campo "Nome Completo" é obrigatório',
            'birthDate.required' => 'O campo "data de nascimento" é obrigatório',
            'genderIdentity.required' => 'O campo "Qual seu gênero" é obrigatório',
            'disability.required' => 'O campo "Possui Alguma Deficiência" é obrigatório',
            'typeOfDisability[].required' => 'O campo "Tipo de Deficiência" é obrigatório',
            'country.required' => 'O campo "País" é obrigatório',
            'fu.required' => 'O campo "UF" é obrigatório',
            'city.required' => 'O campo "Cidade" é obrigatório',
            'city2.required' => 'O campo "Cidade" é obrigatório',
            'typeOfDocument.required' => 'O campo data de nascimento é obrigatório',
            'document.required' => 'O campo "Número / Código" é obrigatório',
            'state.required' => 'O campo "Estado" é obrigatório',
            'email.required' => 'O campo "E-mail" é obrigatório',
            'emailConfirmation.required' => 'O campo "Confirmação do E-mail" é obrigatório',
//            'required' => 'Esse campo é obrigatório',
        ];
    }
}
