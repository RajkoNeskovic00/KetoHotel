<?php

namespace App\Models;

class Blogs
{
    public function getBlogs(){
        return \DB::table('blogs')
            ->orderBy('created_at', 'ASC')
            ->get();
    }
}
