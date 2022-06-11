<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserAdmin;
use App\Models\admin\users;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    private $modUser;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAdmin $request)
    {
        $this->modUser=new users();
        $data=$this->modUser->insertUser($request);
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->modUser=new users();
        $data=$this->modUser->oneUser($id);
        //$data['password']=encrypt($data['password']);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserAdmin $request, $id)
    {
        $this->modUser=new users();
        $this->data['userUp']=$this->modUser->updateUser($request,$id);
        return $this->data['userUp'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->modUser=new users();
        $this->data['userDel']=$this->modUser->deleteUser($id);
        return $this->data['userDel'];
    }
}
