<?php


namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $this->view('home.rooms', ['product' => $products]);
    }
    public function detail()
    {
        $this->view('home.detail_room');
    }
    public function show(){
        $id = $_GET['id'] ?? null;
        $product = ProductModel::find($id);
//        if(!$id){
//            header("location: /home");
//            die;
//        }
        $product = ProductModel::find($id);

//        if(!$product){
//            header("location: /home");
//            die;
//        }

        return $this->view('home.detail', ['product'=>$product]);
    }
}

