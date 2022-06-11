<?php

namespace App\Models\admin;

class manu
{
        public function getAll()
        {
            return \DB::table('manu')->get();
        }
}
