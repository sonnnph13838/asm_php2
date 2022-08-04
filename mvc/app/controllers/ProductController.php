<?php


namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
class ProductController extends Controller
{
    public function index()
    {
        $products = ProductModel::all();
        $this->view('client.rooms', ['product' => $products]);
    }
    public function detail()
    {
        $this->view('client.detail_room');
    }
    public function show(){
        $id = $_GET['id'] ?? null;
        $product = ProductModel::find($id);
//        if(!$id){
//            header("location: /client");
//            die;
//        }
        $product = ProductModel::find($id);

//        if(!$product){
//            header("location: /client");
//            die;
//        }

        return $this->view('client.detail', ['product'=>$product]);
    }
}

