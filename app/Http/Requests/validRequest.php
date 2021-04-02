<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validRequest extends FormRequest
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
            'nameloc'=>'required|min:3|max:50',
            'latitude'=>'required',
            'longitude'=>'required',
        ];
    }
    public function messages()
    {return[
        'nameloc.required' => 'Поле название является обязательным',
        'latitude.required' => 'Поле широта является обязательным',
        'longitude.required' => 'Поле долгота является обязательным'
    ];
    }
}
