<?php


namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends Controller
{
    public function index()
    {
        $list = BlogModel::all();
        $this->view('admin.blog.list', ['list' => $list]);
    }
    public function add()
    {
        //$list = CategoryModel::all();
        $this->view('admin.blog.add');
    }
    public function saveAdd()
    {
        $request = $_POST;
        //Validate
        $errors = [];
        if ($request['title'] == "") {
            $errors['title'] = "Bạn cần nhập Title";
        }
        if ($request['discription'] == "") {
            $errors['discription'] = "Bạn cần nhập discription";
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
        if (!$errors) {
            $request['image'] = $image;
            $cate = new BlogModel;
            $cate->insert($request);
            if ($file['size'] > 0) {
                move_uploaded_file($file['tmp_name'], 'images/' . $image);
            }
        }
        return $this->view(
            'admin.blog.add',
            [
                'errors' => $errors,
                'reques' => $request
            ]
        );
    }
    public function del()
    {
        $id = $_GET['id'];
        BlogModel::delete($id);
        $list = BlogModel::all();
        $this->view('admin.blog.list', ['list' => $list]);
    }
    public function edit()
    {
        $id = $_GET['id'];
        $objData = BlogModel::find($id);
        $types = array($objData);
        $this->view('admin.blog.edit', ['type' => $types]);
    }
    public function saveEdit()
    {
        $id = $_POST['id'];
        $request = $_POST;
        //Validate
        $errors = [];
        if ($request['title'] == "") {
            $errors['title'] = "Bạn cần nhập title";
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
        if (!$errors) {
            if($image == ''){
            $cate = new BlogModel;
            $cate->update($request, $id);
            }else{
            $request['image'] = $image;
            $cate = new BlogModel;
            $cate->update($request, $id);
            if ($file['size'] > 0) {
                move_uploaded_file($file['tmp_name'], 'images/' . $image);
            }
            }
            
            $id = $_GET['id'];
            $objData = BlogModel::find($id);
            $types = array($objData);
            $this->view('admin.blog.edit', ['type' => $types]);
        }
        return $this->view(
            'admin.blog.edit',
            [
                'errors' => $errors,
                'reques' => $request
            ]
        );
    }
}
