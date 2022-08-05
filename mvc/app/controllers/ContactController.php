<?php


namespace App\Controllers;

use App\Models\ContactModel;

class ContactController extends Controller
{
    public function LisContact(){
        $listcontact = ContactModel::all();
        $this->view('admin/contact.list',['listcontact'=>$listcontact]);
    }
}