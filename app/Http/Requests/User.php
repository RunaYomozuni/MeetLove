<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;





class User extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {

        return [
            'photo='=>['string', 'max:100'],
            'name'=>['required','string','max:100'],
            'dateNaissance'=>['required', 'string','max:100'],
            'localisation'=>['required', 'string','max:100'],
            'sexe'=>['required', 'string','max:100'],
            'orientation'=>['required','string', 'string','max:100'],
            'biographie'=>['required','string', 'max:1000']
        ];

    }
}
