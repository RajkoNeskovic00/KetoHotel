<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceAdmin;
use App\Models\admin\admin;

use App\Models\admin\category;
use App\Models\admin\contentRoom;
use App\Models\admin\messages;
use App\Models\admin\price;
use App\Models\admin\report;
use App\Models\admin\reservations;
use App\Models\admin\rooms;
use App\Models\admin\users;
use function view;

class AdminController extends Controller
{
    public $data;
    private  $model;


    public function index()
    {
        $this->model=new users();
        $data[0]=$this->model->getInfo();

        $this->model=new reservations();
        $data[1]=$this->model->getInfoRes();

        $this->model=new messages();
        $data[2]=$this->model->getInfoMes();

        $this->model=new rooms();
        $data[3]=$this->model->getInfoRoom();

        $this->model=new report();
        $data[4]=$this->model->getAll();

        $this->model=new report();
        $data[5]=$this->model->getAllReservation();


        return view("pages.admin.index",compact('data'));
    }
public $dataRoom;
    public function rooms()
    {
        $this->model=new Rooms();
        $this->data['all']=$this->model->getAllRoom();

        $this->model=new contentRoom();
        $this->data['content']=$this->model->getContentAll();


        $this->model=new category();
        $this->data['cat']=$this->model->allCategory();
        $this->model=new price();
        $this->data['price']=$this->model->allPrice();
        $this->model=new price();
        $this->data['dics']=$this->model->allDisc();
        $this->model=new price();
        $this->data['mark']=$this->model->allMark();
        return view("pages.admin.rooms",$this->data);

    }

    public function users()
    {
        $this->model=new users();
        $this->data['users']=$this->model->allUsers();
        $this->model=new users();
        $this->data['role']=$this->model->allRole();
        return view("pages.admin.users",$this->data);
    }
    public function category()
    {
        $this->model=new category();
        $data=$this->model->allCategory();
        return view("pages.admin.category",compact('data'));
    }

    public function price()
    {
        $this->model=new price();
        $data=$this->model->allPrice();
        return view('pages.admin.price',compact('data'));
    }
    public function storePrice(PriceAdmin $request)
    {
        $this->model=new price();
        $data=$this->model->insertPrice($request);
        return $data;
    }
    public function priceDelete($id)
    {
        $this->model=new price();
        $data=$this->model->deleteP($id);
        return $data;
    }
    public function showPrice($id){
        $this->model=new price();
        $data=$this->model->onePrice($id);
       return $data;
    }

    public function updatePrice(PriceAdmin $request,$id)
    {
        $this->model=new price();
        $data=$this->model->updateP($request,$id);
        return $data;
    }

    public function message()
    {
        $this->model=new messages();
        $data=$this->model->getMessages();
        return view('pages.admin.message',compact('data'));
    }
}
