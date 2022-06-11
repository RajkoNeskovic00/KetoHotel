<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends OsnovniController
{
    private $model;
    public function index()
    {
        $this->model=new Blogs();
        $this->data['blogs']=$this->model->getBlogs();
        return view('pages.blog',$this->data);
    }
}
