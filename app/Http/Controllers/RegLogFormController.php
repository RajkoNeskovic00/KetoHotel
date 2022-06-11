<?php

namespace App\Http\Controllers;

use App\Models\admin\report;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegLogFormController extends Controller
{
    public function index()
    {
        return view('forms.logRegForm');
    }
    private $modelRep;
    public function store()
    {
//        dd(request());
        $this->validate(request(), [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            "id_uloga"=>'required'
        ]);

        $user = User::create(request(['name','last_name', 'email', 'password',"id_uloga"]));
        auth()->login($user);
        if(auth()->check())
        {
            $this->modelRep=new report();
            $this->modelRep->inserReport($user,"The user has registered");
            return redirect()->to('/');
        }


    }
}
