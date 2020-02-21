<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateForm extends FormRequest
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
             'name' => 'bail|required|alpha_num|between:2,17',
             'url' => 'required',
             'check' =>'required',
             'tos' => 'accepted',
             'phone' => 'required|regex:/(92)[0-9]{10}/',
            's_date' => 'required',
            'e_date' => 'required'

        ];
    }

    public function messages()
    {

        return [
            'name.required' => 'We need to know your name',
            'check.required' => 'Radio Button Fields are required',
            'tos.accepted' => 'Please Accept the terms and condtions field.',
            'url.required' => 'We need to know your Facebook Profile URL.',
            'e_date.required' => 'Subscription is a required field.',
        ];
    }
    public function attributes()
    {
        return [
            'photo' => 'logo',
            'check' => 'Checkbox',

        ];
    }
}
