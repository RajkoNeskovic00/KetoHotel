<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoomBookingStore;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends OsnovniController
{

    private $roomAll;
    private $booking;
    private $categoryAll;

    public function index(Request $request)
    {

        $this->roomAll=new Room();
        $dataRoom=$this->roomAll->get($request);

        $this->categoryAll=new Room();
        $categories=$this->categoryAll->getAllCategory();

        $qs = $request->all();
//
////        $this->roomAll=new Room();
////        $this->data['rooms']=$this->roomAll->getAllRoom();
//
        return view('pages.rooms',[
            "manu"=>$this->data['manu'],
            "slider"=>$this->data['slider'],
            "rooms" => $dataRoom,
            "category" => $categories,
            "qs" => $qs
        ]);
    }
    public function show($id)
    {
        $this->roomAll=new Room();
        $this->data['room']=$this->roomAll->getOneRoom($id);
        $this->data['sadrzaj']=$this->roomAll->roomContent($id);

        return view('pages.room.room',$this->data);
    }

    public function store(RoomBookingStore $request)
    {

            $this->booking = new Booking();
            $data=$this->booking->reservedRoom($request);
            return $data;
    }



}
