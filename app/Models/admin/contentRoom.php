<?php

namespace App\Models\admin;

use App\Http\Requests\ContentAdmin;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class contentRoom extends Model
{
    public function getContentAll(){
        return \DB::table('sadrzaj_smestaj')->get();
    }
    public function insertContent(Request $request)
    {
        return \DB::table('sadrzaj_smestaj')->insertGetId([
           "naziv"=>$request->input('value')
        ]);
    }
    public function deleteCont($id)
    {
        return \DB::table('sadrzaj_smestaj')->where('id_sadrzaj_smestaj','=',$id)->delete();
    }
    public function oneContent($id)
    {
        return \DB::table('sadrzaj_smestaj')->where('id_sadrzaj_smestaj',$id)->first();
    }
    public function updateContent($request,$id)
    {
        $upCon=$request->input('value');
        return \DB::table('sadrzaj_smestaj')
            ->where('id_sadrzaj_smestaj',$id)
            ->update(['naziv'=>$upCon]);
    }
}
