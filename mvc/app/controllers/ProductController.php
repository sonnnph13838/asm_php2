<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;
class ProductController extends Controller
{
    public function index()
    {
        $ctgs = CategoryModel::all();
        $products = RoomModel::allNew();
        $this->view('client.rooms', ['product' => $products ,'ctg' => $ctgs]);
    }
    public function detail()
    {
        $ctgs = CategoryModel::all();
        $id = $_GET['id'];
        $id_for = $_GET['id_kfr'];
        $s = new RoomModel;
        $kind = $s->where('id_kind_of_room','=',$id_for)->get();
        // echo "<pre>";
        // var_dump($kind);die;
        $findRoom = RoomModel::find($id);
        $rooms = array($findRoom);
        $this->view('client.detail_room',['room'=>$rooms,'kindRooms'=>$kind, 'ctg' => $ctgs]);
    }
}

