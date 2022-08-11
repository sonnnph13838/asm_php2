<?php


namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function register()
    {
        $this->view('auth.register');
    }
    public function saveRegister()
    {
        $request = $_POST;
        $cate = new UserModel;
        $req = $cate->insert($request);
        $_SESSION['email'] = $req;
        header('Location:' . ADMIN_URL . 'user');
    }
    public function login()
    {
        $this->view('auth.login');
    }
    public function saveLogin()
    {
        //$request = $_POST;
        $log = new UserModel;
        $req = $log->where('email', '=', $_POST['email'])->andWhere('password', '=', $_POST['password'])->get();
        //var_dump($req>0 );die;
        if (is_array($req) && !(empty($req))) {        
            $_SESSION['login']['email'] = $_POST['email'];
            //var_dump($_SESSION['login']['email']);die;
            header('Location:' . ADMIN_URL . 'user');
        } else {
            header('Location:' . ADMIN_URL . 'login');
        }
    }
    function logout()
    {
        session_unset();
        header('location: ' . ADMIN_URL . 'admin');
    }
}
