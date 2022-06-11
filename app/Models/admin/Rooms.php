<?php

namespace App\Models\admin;

use Carbon\Carbon;
use http\Env\Request;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class Rooms extends Model
{
//    use HasFactory;
//    protected $table = 'rooms';
    public function getInfoRoom()
    {
        return rooms::count();
    }

   public function getAllRoom(){
       return \DB::table('rooms')
           ->select("rooms.*",'m.value as ocena','rooms.name as name','cat.name as cat','c.Price as cena','p.value as popust')
           ->join("category as cat", "rooms.id_cat", "=", "cat.id_cat")
           ->join('soba_cena as sc','rooms.id','=','sc.id_soba')
           ->join('cena as c','sc.id_cena','=','c.id_cena')
           ->join('popust_soba as ps',"rooms.id",'=','ps.id_soba')
           ->join('popust as p','ps.id_popust','=','p.id')
           ->join('mark as m','rooms.id_mark','=','m.id_mark')
//           ->join('soba_sadrzaj as ss','rooms.id','=','ss.id_soba')
//           ->join('sadrzaj_smestaj as ssm','ss.id_sadrzaj_smestaj','=','ssm.id_sadrzaj_smestaj')
           ->get();
   }
    public function getOneRoom($id){
        return \DB::table('rooms')
            ->select("rooms.*",'m.value as ocena','rooms.name as name','cat.name as cat','c.Price as cena','p.value as popust')
            ->join("category as cat", "rooms.id_cat", "=", "cat.id_cat")
            ->join('soba_cena as sc','rooms.id','=','sc.id_soba')
            ->join('cena as c','sc.id_cena','=','c.id_cena')
            ->join('popust_soba as ps',"rooms.id",'=','ps.id_soba')
            ->join('popust as p','ps.id_popust','=','p.id')
            ->join('mark as m','rooms.id_mark','=','m.id_mark')
            ->where('rooms.id','=',$id)
            ->first();
    }

   public function insertRoom($request)
   {
          $name=$request->input("name");
          $description=$request->input("desc");
          $id_cat=$request->input("cat");
          $id_price=$request->input('cena');
          $id_popust=$request->input('discount');
          $id_mark=$request->input('mark');
          $image=$request->input('image');



          try{
              $select = DB::table('rooms')
                  ->where('name', $name)
                  ->first();
              if($select){
                  return false;
              }
              else{
                  $insertRoom = DB::table('rooms')->insertGetId([
                      'name' => $name,
                      'description' => $description,
                      'id_cat' => $id_cat,
                      'id_mark' => $id_mark,
                      'image' => $image,
                      'created_at' => Carbon::now()->toDateTime()
                  ]);

                  if($insertRoom)
                  {
                      move_uploaded_file($_FILES['imageArr']['tmp_name'],public_path().'/assets/images/'.$_FILES['imageArr']['name']);

                      $insertPrice = DB::table('soba_cena')->insert([
                          'id_soba' => $insertRoom,
                          'id_cena' => $id_price,
                          'date' => Carbon::now()->toDateTime()
                      ]);

                      $insertDiscount = DB::table('popust_soba')->insert([
                          'id_soba' => $insertRoom,
                          'id_popust' => $id_popust,
                          'date' => Carbon::now()->toDateTime()
                      ]);
                  }
                  return true;
              }
          }
          catch (QueryException $e)
          {
              Log::error($e->getMessage());
          }

   }

   public function updateRoom($request,$id)
   {
       $name=$request->input("name");
       $description=$request->input("desc");
       $id_cat=$request->input("cat");
       $id_price=$request->input('cena');
       $id_popust=$request->input('discount');
       $id_mark=$request->input('mark');



       try
       {
           $updateRoom = DB::table('rooms')
               ->where('id', $id)
               ->update([
                   'name' => $name,
                   'description' => $description,
                   'id_cat' => $id_cat,
                   'id_mark' => $id_mark,
                   'updated_at' => Carbon::now()->toDateTime()
               ]);
           if($updateRoom)
           {
               $selectRoomPrice = DB::table('soba_cena')
                   ->select('id_soba_cena')
                   ->where('id_soba', $id)
                   ->first();
               if($selectRoomPrice)
               {
                   $updateRoomPrice = DB::table('soba_cena')
                       ->where('id_soba', $id)
                       ->update([
                           'id_cena' => $id_price,
                           'updated_at' => Carbon::now()->toDateTime()
                       ]);
               }
               $selectRoomDiscount = DB::table('popust_soba')
                   ->select('id_popust_soba')
                   ->where('id_soba', $id)
                   ->first();
               if($selectRoomDiscount)
               {
                   $updateRoomDiscount = DB::table('popust_soba')
                       ->where('id_soba', $id)
                       ->update([
                           'id_popust' => $id_popust,
                           'updated_at' => Carbon::now()->toDateTime()
                       ]);
               }
            return true;
           }
       }
       catch(QueryException $e){

           Log::error($e->getMessage());
       }
   }














   public function deleteRoom($id)
   {
       try{

           return \DB::table('rooms')
               ->where('id', $id)
               ->delete();



       }catch(\Exception $e){

           Log::error($e->getMessage());
       }
   }
}
