<?php


namespace App\Controllers;
use App\Models\RoomModel;
use App\Models\CategoryModel;
use App\Models\UserModel;

class UserListController extends Controller
{
    public function listUser()
    {
        $list = UserModel::all();
        $this->view('admin/user.list',['list'=>$list]);
    }
}