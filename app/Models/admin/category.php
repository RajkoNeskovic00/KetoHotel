<?php

namespace App\Models\admin;

use App\Http\Requests\CategoryAdmin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;
    protected $table='category';

   public function allCategory()
   {
       return category::all();
   }
   public function insertCategory($request)
   {
       return \DB::table('category')->insertGetId([
           'name'=>$request->input("value")
       ]);
   }
   public function deleteCat($id){
       return \DB::table('category')->where("id_cat",$id)->delete();
   }
    public function oneCat($id)
    {
        return \DB::table('category')->where('id_cat',$id)->first();
    }
    public function updateC($request,$id)
    {
        $upCat=$request->input('value');
        return \DB::table('category')
            ->where('id_cat',$id)
            ->update(['name'=>$upCat]);
    }


}
