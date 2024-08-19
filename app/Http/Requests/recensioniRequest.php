<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class recensioniRequest extends FormRequest
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
        return [
            'titolo'=>'required|string',
            'recensione'=>'required|string',
        ];
    }


    public function messages():array {

        return[
        'titolo.required'=>'inserisci il nome',
        'recensione.required'=>'inserisci una recensione',

        ];
    }
}
