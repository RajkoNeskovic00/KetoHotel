<?php

namespace App\Http\Controllers;

use App\Models\admin\report;
use Illuminate\Http\Request;

use function Symfony\Component\String\s;

class SessionsController extends Controller
{
    private $modelReport;
    public function store()
    {

        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        else{
            $this->modelReport=new report();
            $this->modelReport->inserReport(auth()->user(),"The user has logged in");
            session(['log' => 'logEd']);
        }



        return redirect()->to('/');
    }
    public function destroy()
    {
        $this->modelReport=new report();
        $this->modelReport->inserReport(auth()->user(),"The user has logged out");

        auth()->logout();

        return redirect()->to('/');
    }
}
