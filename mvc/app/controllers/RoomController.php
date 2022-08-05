<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;
use App\Models\ServiceModel;
use App\Models\Kind_of_roomModel;
class RoomController extends Controller
{
    public function index()
    {
       
        if(isset($_GET['idType'])){
            $id= $_GET['idType'];
            $product = new RoomModel;
            $products = $product->where('id_kind_of_room','=',$id)->get();
        }else{
            $products = RoomModel::allNew();
        }
        $ctgs = CategoryModel::all();
        
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
    public function listAd(){
        $room = RoomModel::all();
        $cate = ServiceModel::all();
        $kind = Kind_of_roomModel::all();
        $this->view('admin/room.list',['room'=>$room , 'cate'=> $cate , 'kind'=>$kind]);
    }
    public function addAd(){
        $cate = ServiceModel::all();
        $kind = Kind_of_roomModel::all();
        $this->view('admin/room.add', ['cate'=> $cate , 'kind'=>$kind]);
    }
    public function SaveaddAd(){
        $request = $_POST;
        $room = new RoomModel();
        $room->insert($request);
        header('location:http://localhost:8000/rooms');
    }
    public function update(){
        $id = $_GET['id'];
        $obj = RoomModel::find($id);
        $types = array($obj);
        $cate = ServiceModel::all();
        $kind = Kind_of_roomModel::all();
        $this->view('admin/room.update', ['types'=>$types, 'cate'=> $cate , 'kind'=>$kind]);
    }
}

