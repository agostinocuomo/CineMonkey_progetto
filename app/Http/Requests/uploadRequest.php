<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class uploadRequest extends FormRequest
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
           
                'nametitolo'=>'required|string',
                'descrizione'=>'required|string',
                'imagetitolo'=>'mimes:jpeg,jpg,bmp,png',
                'genere'=>'required',
             
        ];
    }


    public function messages():array {

        return[
        'nametitolo.required'=>'inserisci il nome',
        'descrizione.required'=>'inserisci una descrizione',
        'imagetitolo.mimes'=>'accetta formati jpeg jpg bmp png',
        'genere.required'=>'scegli un genere',

        ];
    }
}
