<?php

namespace App\Models\admin;

class report
{
    public function getAll()
    {
        return \DB::table("report")->orderBy('date','desc')->limit(10)->get();
    }
    public function inserReport($user,$mes)
    {
        return \DB::table('report')->insertGetId([
            'fullName'=>$user->name." ".$user->last_name,
            'email'=>$user->email,
            'poruka'=>$mes
        ]);
    }
    public function getAllReservation()
    {
        return \DB::table('reservations as r')
            ->select('r.*',"u.name as ime",'u.last_name as prezime','ro.name as soba')
            ->join('users as u','r.id_korisnika','=','u.id_korisnika')
            ->join('rooms as ro','r.id_soba','=','ro.id')
            ->get();

    }
}
