<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegRequest extends FormRequest
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
                    'login'=>'required|min:3|max:50',
                    'password'=>'required',
                                    ];
            }
            public function messages()
            {return[
                'login.required' => 'Поле логин является обязательным',
                'password.required' => 'Поле пароль является обязательным'
               
            ];
            }
       
    }

