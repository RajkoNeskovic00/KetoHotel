<?php

namespace App\Models;

class Gallery
{
    public function getGallery(){
        return \DB::table('galleries')
            ->orderBy('created_at','ASC')
            ->get();
    }
}
