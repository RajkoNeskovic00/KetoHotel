<?php

namespace App\Models;

use App\Http\Requests\ContactStoreRequest;

class Contact
{
    public function insertMes(ContactStoreRequest $request)
    {
        return \DB::table('messages')
            ->insertGetId([
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'phone'=>$request->input('phone'),
                'message'=>$request->input('message')
            ]);
    }
}
