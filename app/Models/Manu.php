<?php

namespace App\Models;

class Manu
{
    public function getManu()
    {
        return \DB::table('manu')
            ->select('name','route')
            ->get();
    }
}
