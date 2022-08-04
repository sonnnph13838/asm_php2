<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    public function index()
    {
        $products = RoomModel::allNew();
        $ctgs = CategoryModel::all();
        $this->view('client.index', ['product' => $products, 'ctg' => $ctgs]);
    }
}

