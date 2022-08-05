<?php


namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\RoomModel;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    public function index()
    {
        $blog = BlogModel::all2();
        $products = RoomModel::allNew();
        $ctgs = CategoryModel::all();
        $this->view('client.index', ['product' => $products, 'ctg' => $ctgs, 'blog'=>$blog]);
    }
}

