<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateProfil extends FormRequest
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
            'nameNv' => 'required',
            'prenomNv' =>'required',
            'emailNv' =>'required',
            'ageNv' =>'required',
            'civiliteNv'=>'required',
            'roleNv' =>'required',
            'villeNv' =>'required',
            'passwordNv'=>'required'
        ];
    }
}
