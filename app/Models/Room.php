<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Room
{
    public function getTopRoom($n){
        return \DB::table('rooms')
            ->select('rooms.*','c.Price as Price')
            ->join('mark','rooms.id_mark','=','mark.id_mark')
            ->join('soba_cena as sc',"rooms.id",'=','sc.id_soba')
            ->join('cena as c','sc.id_cena','=','c.id_cena')
            ->orderBy('mark.value','DESC')
            ->limit($n)
            ->get();

    }
//    public function getAllRoom()
//    {
//        $query= DB::table('rooms')
//            ->select('*');
//
//        $perPage = 6;
//        return $query->paginate($perPage)->withQueryString();
//
//    }
    public function getAllCategory()
    {
        return \DB::table('category')
            ->select('*')
            ->get();
    }
    public function getOneRoom($id)
    {
        return \DB::table('rooms')
            ->select("rooms.*",'mark.value as ocena','category.name as cat','p.value as popust','c.Price as cena')
            ->join("category", "rooms.id_cat", "=", "category.id_cat")
            ->join('mark','rooms.id_mark','=','mark.id_mark')
            ->join('popust_soba as ps',"rooms.id",'=','ps.id_soba')
            ->join('popust as p','ps.id_popust','=','p.id')
            ->join('soba_cena as sc',"rooms.id",'=','sc.id_soba')
            ->join('cena as c','sc.id_cena','=','c.id_cena')
            ->where('rooms.id',$id)
            ->first();
    }

    public function roomContent($id)
    {
        return \DB::table('rooms')
            ->select('ssm.naziv')
            ->join('soba_sadrzaj as ss','rooms.id','=','ss.id_soba')
            ->join('sadrzaj_smestaj as ssm','ss.id_sadrzaj_smestaj','=','ssm.id_sadrzaj_smestaj')
            ->where('rooms.id',$id)
            ->get();
    }

    public function get(Request $request)
    {

//        SELECT
        $query= DB::table('rooms');
//      JOIN
        $query = $query->join("category", "rooms.id_cat", "=", "category.id_cat");
        $query=$query->join('soba_cena as sc','rooms.id','=','sc.id_soba')->join('cena as c','sc.id_cena','=','c.id_cena');



//        //WHERE
        if($request->has("category")) {
            $query = $query->whereIn("rooms.id_cat", $request->get("category"));
        }

        if($request->has("keyword") && $request->get("keyword")) {
            $query = $query->where(function($q) use ($request) {
                $key = $request->get("keyword");
                return $q->where("rooms.name", "like", '%' . $key . '%')
                         ->orWhere("category.name", "like", '%' . $key . '%');

            });
        }
//
       $query = $query->select("rooms.*","c.Price as Price");

        if($request->has("sortBy")) {
            $sort = explode("-", $request->get("sortBy"));
            $query = $query->orderBy($sort[0], $sort[1]);
        }

        $perPage = 6;
        if($request->has("perPage")) {
            $perPage = $request->get("perPage");
        }
//        else{
//            $request->request->add(["perPage",6]);
//        }


        return $query->paginate($perPage)->withQueryString();
    }


    public function getData($roomId)
    {
        return \DB::table('rooms')
            ->select('rooms.name as name','cat.name as cat','c.Price as cena','p.value as popust')
            ->join("category as cat", "rooms.id_cat", "=", "cat.id_cat")
            ->join('soba_cena as sc','rooms.id','=','sc.id_soba')
            ->join('cena as c','sc.id_cena','=','c.id_cena')
            ->join('popust_soba as ps',"rooms.id",'=','ps.id_soba')
            ->join('popust as p','ps.id_popust','=','p.id')

            ->where('rooms.id',$roomId)
            ->first();
    }
}
