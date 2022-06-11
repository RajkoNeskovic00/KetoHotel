<?php

namespace App\Http\Controllers;

use App\Models\Manu;
use App\Models\Slider;
use Illuminate\Http\Request;

class OsnovniController extends Controller
{
    public $data;
    private $manuModel;
    private $sliderModel;

    public function __construct()
    {
        $this->manuModel=new Manu();
        $this->sliderModel=new Slider();

        $this->data['slider']=$this->sliderModel->getSlider();
        $this->data['manu']=$this->manuModel->getManu();
    }
}
