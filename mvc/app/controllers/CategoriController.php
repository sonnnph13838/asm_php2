<?php


namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\RoomModel;
use App\Models\UserModel;

class CategoriController extends Controller
{
    public function index()
    {
        $list = CategoryModel::all();
        $this->view('admin.categori.list',['list'=>$list]);
    }
    public function add()
    {
        //$list = CategoryModel::all();
        $this->view('admin/categori.add');
    }
    public function saveAdd()
    {
       $request = $_POST;
       //Validate
       $errors = [];
       if ($request['name'] == "") {
           $errors['name'] = "Bạn cần nhập tên loại";
       }
       if(!$errors){
        $cate = new CategoryModel;
        $cate->insert($request);
       }
       return $this->view(
        'admin.categori.add',
        [
            'errors' => $errors,
            'reques' => $request
        ]
    );
    }
    public function del(){
        $id = $_GET['id'];
        CategoryModel::delete($id);
        $list = CategoryModel::all();
        $this->view('admin.categori.list',['list'=>$list]);
    }
    public function edit(){
        $id = $_GET['id'];
        $objData = CategoryModel::find($id);
        $types = array($objData);
        $this->view('admin.categori.edit',['type'=>$types]);
    }
    public function saveEdit(){
        $id = $_POST['id'];
        $request = $_POST;
       //Validate
       $errors = [];
       if ($request['name'] == "") {
           $errors['name'] = "Bạn cần nhập tên loại";
       }
       if(!$errors){
        $cate = new CategoryModel;
        $cate->update($request,$id);
        $id = $_GET['id'];
        $objData = CategoryModel::find($id);
        $types = array($objData);
        $this->view('admin.categori.edit',['type'=>$types]);
       }
       return $this->view(
        'admin.categori.edit',
        [
            'errors' => $errors,
            'reques' => $request
        ]
    );
    }
    
}