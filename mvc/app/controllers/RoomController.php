<?php


namespace App\Controllers;

use App\Models\RoomModel;
use App\Models\CategoryModel;

class RoomController extends Controller
{
    public function index()
    {

        if (isset($_GET['idType'])) {
            $id = $_GET['idType'];
            $product = new RoomModel;
            $products = $product->where('id_kind_of_room', '=', $id)->get();
        } else {
            $products = RoomModel::allNew();
        }
        $ctgs = CategoryModel::all();

        $this->view('client.rooms', ['product' => $products, 'ctg' => $ctgs]);
    }
    public function detail()
    {
        $ctgs = CategoryModel::all();
        $id = $_GET['id'];
        $id_for = $_GET['id_kfr'];
        $s = new RoomModel;
        $kind = $s->where('id_kind_of_room', '=', $id_for)->get();
        // echo "<pre>";
        // var_dump($kind);die;
        $findRoom = RoomModel::find($id);
        $rooms = array($findRoom);
        $this->view('client.detail_room', ['room' => $rooms, 'kindRooms' => $kind, 'ctg' => $ctgs]);
    }
    public function index1()
    {
        $rooms = RoomModel::all();
        $types = CategoryModel::all();
        $this->view('admin.room.list', ['room' => $rooms, 'type' => $types]);
    }
    public function add()
    {
        $types = CategoryModel::all();
        $this->view('admin.room.add', ['type' => $types]);
    }
    public function saveAdd()
    { {
            $request = $_POST;
            //Validate
            $errors = [];
            if ($request['name'] == "") {
                $errors['name'] = "Bạn cần nhập name";
            }
            if ($request['price'] == "") {
                $errors['price'] = "Bạn cần nhập price";
            }
            if ($request['discription'] == "") {
                $errors['discription'] = "Bạn cần nhập discription";
            }
            if ($request['id_kind_of_room'] == 0) {
                $errors['id_kind_of_room'] = "Bạn cần chon Types";
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
                $cate = new RoomModel;
                $cate->insert($request);
                if ($file['size'] > 0) {
                    move_uploaded_file($file['tmp_name'], 'images/' . $image);
                }
                header('Location: /room');
            }
            $cate = CategoryModel::all();
            return $this->view(
                'admin.room.add',
                [
                    'type' => $cate,
                    'errors' => $errors,
                    'reques' => $request
                ]
            );
        }
    }
    public function del()
    {
        $id = $_GET['id'];
        RoomModel::delete($id);
        $rooms = RoomModel::all();
        $types = CategoryModel::all();
        $this->view('admin.room.list', ['room' => $rooms, 'type' => $types]);
    }
    public function edit()
    {
        $id = $_GET['id'];
        $objData = RoomModel::find($id);
        $rooms = array($objData);
        $types = CategoryModel::all();
        $this->view('admin.room.edit', ['room' => $rooms, 'type' => $types]);
    }
    public function saveEdit()
    {
        $id = $_POST['id'];
        $request = $_POST;
        //Validate
        $errors = [];
        if ($request['name'] == "") {
            $errors['name'] = "Bạn cần nhập name";
        }
        if ($request['price'] == "") {
            $errors['price'] = "Bạn cần nhập price";
        }
        if ($request['discription'] == "") {
            $errors['discription'] = "Bạn cần nhập discription";
        }
        if ($request['id_kind_of_room'] == 0) {
            $errors['id_kind_of_room'] = "Bạn cần chon Types";
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
            if ($image == '') {
                $cate = new RoomModel;
                $cate->update($request, $id);
            } else {
                $request['image'] = $image;
                $cate = new RoomModel;
                $cate->update($request, $id);
                if ($file['size'] > 0) {
                    move_uploaded_file($file['tmp_name'], 'images/' . $image);
                }
            }

            $id = $_GET['id'];
            $objData = RoomModel::find($id);
            $rooms = array($objData);
            $types = CategoryModel::all();
            $this->view('admin.room.edit', ['room' => $rooms, 'type' => $types]);
        }
        return $this->view(
            'admin.room.edit',
            [
                'errors' => $errors,
                'reques' => $request
            ]
        );
    }
}
