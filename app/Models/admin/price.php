<?php

namespace App\Models\admin;

use App\Http\Requests\PriceAdmin;
use Illuminate\Database\Eloquent\Model;

class price extends Model
{
    public function allDisc(){
        return \DB::table('popust')->get();
    }
    public function allMark(){
        return \DB::table('mark')->get();
    }
    public function allPrice(){
        return \DB::table('cena')->get();
    }
    public function insertPrice(PriceAdmin $request)
    {
        $price=$request->input('value');
        return \DB::table('cena')->insertGetId([
            'Price'=>$price
        ]);
    }
    public function deleteP($id)
    {
        return \DB::table('cena')->where('id_cena','=',$id)->delete();
    }
    public function onePrice($id)
    {
        return \DB::table('cena')->where('id_cena',$id)->first();
    }
    public function updateP($request,$id)
    {
        $upPrice=$request->input('value');
        return \DB::table('cena')
                ->where('id_cena',$id)
                ->update(['Price'=>$upPrice]);
    }
}
