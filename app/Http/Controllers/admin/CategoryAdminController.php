<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryAdmin;
use App\Models\admin\category;
use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{

    public $data;
    private $catModel;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryAdmin $request)
    {
        $this->catModel=new category();
        $this->data['categoryInsert']=$this->catModel->insertCategory($request);
        return $this->data['categoryInsert'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->catModel=new category();
        $data=$this->catModel->oneCat($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryAdmin $request, $id)
    {
        $this->catModel=new category();
        $data=$this->catModel->updateC($request,$id);
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->catModel=new category();
        $this->data['catDelete']=$this->catModel->deleteCat($id);
        return $this->data['catDelete'];
    }
}
