<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomsAdmin extends FormRequest
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
            'name'=>'required|max:30',
            'desc' => 'required|max:500',
            'cat'=>'required|max:30',
            'cena'=>'required|max:30',
            'discount'=>"required|max:30",
            "mark"=>"required|max:30",
            "image"=>'required|max:30'
        ];
    }
}
