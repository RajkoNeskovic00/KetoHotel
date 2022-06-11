<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
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
            'name'=>'required|regex:/([A-Z][a-zA-Z]*)/',
            'email'=>'required|email',
            'phone'=>'required',

        ];
    }

    public function messages()
    {
        return
            [
                'required' => 'The :attribute field is required.',
                'name.regex' => 'Name must not be longer than  characters.',
                'email.regex' => 'Name must not be longer than  characters.',
                'numeric' => 'The  field must have a numeric value.',
            ];
    }
}
