<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;
class UserListController extends Controller
{
    public function listUser()
    {
        $this->view('admin/user.list');
    }
}