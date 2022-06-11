<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomBookingStore extends FormRequest
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
            'nameFull'=>'required|max:30',
            'email' => 'required|email',
            'roomName'=>'required|max:30',
            'category'=>'required|max:30',
            'dateIn'=>"required|max:30",
            "dateOut"=>"required|max:30",
            "cena"=>'required|max:30'

        ];
    }
}
