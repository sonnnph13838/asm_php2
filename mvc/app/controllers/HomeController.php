<?php


namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class HomeController extends Controller
{
    public function index()
    {
        $products = ProductModel::all3();
        $ctgs = CategoryModel::all();
        $this->view('home.index', ['product' => $products, 'ctg' => $ctgs]);
    }
}

