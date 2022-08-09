<?php


namespace App\Controllers;
use App\Models\UserModel;

class UserController extends Controller
{
    public function listUser()
    {
        $list = UserModel::all();
        $this->view('admin/user.list',['list'=>$list]);
    }
    public function edit(){
        $users =  UserModel::find($_GET['id']);
        $fidUser = array($users);
        $this->view('admin.user.edit',['user'=>$fidUser]);
    }
    public function saveEdit(){
        $id = $_POST['id'];
        $request = $_POST;
        $errors = [];
       if ($request['name'] == "") {
           $errors['name'] = "Bạn cần nhập tên loại";
       }
       if ($request['email'] == ""){
        $errors['email'] = "Bạn cần nhập email";
       }
       
       $file = $_FILES['image'];
       //var_dump($file);die;
        if ($file['size'] > 0) {
            $image = $file['name'];
            //Lấy ra phần mở rộng của file
            $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));

            //Kiểm tra file không file ảnh
            if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
                $errors['image'] = "Bạn phải chọn file ảnh";
            }
        } else {
            $image = '';
        }
       if(!$errors){
        $request['image'] = $image;
        $users = new UserModel;
        $users->update($request,$id);
        if ($file['size'] > 0) {
            move_uploaded_file($file['tmp_name'], 'images/' . $image);
        }
        $id = $_GET['id'];
        $objData = UserModel::find($id);
        $types = array($objData);
        $this->view('admin.user.edit',['user'=>$types]);
       }
       return $this->view(
        'admin.user.edit',
        [
            'errors' => $errors,
            'reques' => $request
        ]
    );
    }
    public function del(){
        $id = $_GET['id'];
        UserModel::delete($id);
        $list = UserModel::all();
        $this->view('admin/user.list',['list'=>$list]);
    }
}