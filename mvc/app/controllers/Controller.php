<?php

namespace App\Controllers;

class Controller
{
    public function view($path, $data = [])
    {
        extract($data);
        $path = str_replace('.', '/', $path);
        include_once __DIR__ . '/../views/' . $path . ".php";
    }
    public function checkLogin(){
        if(isset( $_SESSION['login']['email'])){

        }
        else{
            echo "Bạn phải ". '<a href="/login">Login</a>'." để thêm sửa xóa";
            die;
        }
    }
}