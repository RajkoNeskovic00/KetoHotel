<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    public function getInfoMes()
    {
        return messages::count();
    }

    public function getMessages()
    {
        return \DB::table('messages')->select("*")->get();
    }
    public function deleteMes($id)
    {
        return \DB::table('messages')->where('id',$id)->delete();
    }
}
