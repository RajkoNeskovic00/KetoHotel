<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    public function getInfo()
    {
        $info=users::count();

        return $info;
    }

    public function allUsers()
    {
        return \DB::table('users')
            ->select("users.*", "u.name as uloga")
            ->join('uloge as u', 'users.id_uloga', '=', 'u.id')
            ->get();
    }
    public function insertUser($request)
    {

        return \DB::table('users')->insertGetId([
            'name'=>$request->input('name'),
            'last_name'=>$request->input('lname'),
            'email'=>$request->input('email'),
            'password'=>bcrypt($request->input('pass')),
            'id_uloga'=>$request->input('role')
        ]);
    }
    public function deleteUser($id){
        return \DB::table('users')->where('id_korisnika',$id)->delete();
    }
    public function oneUser($id)
    {
        return \DB::table('users')->where('id_korisnika',$id)->first();
    }
    public function updateUser($request,$id)
    {
        return \DB::table('users')
            ->where('id_korisnika',$id)
            ->update([
                'name'=>$request->input('name'),
                'last_name'=>$request->input('lname'),
                'email'=>$request->input('email'),
                'password'=>bcrypt($request->input('pass')),
                'id_uloga'=>$request->input('role')
            ]);
    }

    public function allRole(){
        return \DB::table("uloge")->get();
    }

}
