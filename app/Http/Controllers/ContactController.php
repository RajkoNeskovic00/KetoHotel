<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends OsnovniController
{
    private $contactModel;
    private $result;
    public function index()
    {
        return view('pages.contact',$this->data);
    }

    public function store(ContactStoreRequest $request)
    {
        $this->contactModel=new Contact();
        $this->result=$this->contactModel->insertMes($request);
        return $this->result;
    }
}
