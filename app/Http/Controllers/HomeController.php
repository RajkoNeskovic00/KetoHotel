<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Gallery;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends OsnovniController
{
    private $blogAll;
    private $galleryAll;
    private $rooms;


    public function index($roomId=null){
//dd($room);
        $this->blogAll=new Blogs();
        $this->galleryAll=new Gallery();
        $this->rooms=new Room();


        $this->data['idPoslateSobe']=$roomId;
        //dd($this->data['route']);
//        $data=explode('/',$this->data['route']);
//        $this->data['urlData']=$data[count($data)-1];


        $this->data['rooms']=$this->rooms->getTopRoom(6);
        $this->data['blogs']=$this->blogAll->getBlogs();
        $this->data['galleries']=$this->galleryAll->getGallery();

        if($roomId != null && $roomId>0)
        {
            $this->data['dataForForm']=$this->rooms->getData($roomId);
            $this->data['sobaId']=$roomId;
        }
//      dd($this->data['dataForForm']);

        return view('pages.home',$this->data);
    }
}
