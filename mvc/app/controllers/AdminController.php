<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;
class AdminController extends Controller
{
    public function indexAdmin()
    {
        $this->view('admin.index');
    }
}