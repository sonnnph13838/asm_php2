<?php
 session_start();
require_once '../commons/utlis.php';
require_once '../vendor/autoload.php';
use App\Controllers\RoomController;
use App\Controllers\HomeController;
use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\BlogController;
use App\Controllers\CategoriController;
use App\Controllers\UserController;
use App\Router;
Router::get('/',[HomeController::class,'index']);
Router::get('/rooms',[RoomController::class,'index']);
Router::get('/detail_room',[RoomController::class,'detail']);
//admin
Router::get('/admin',[AdminController::class,'indexAdmin']);
//user
//var_dump($_SESSION['email']);die;
if($_SESSION){
Router::get('/user/edit',[UserController::class,'edit']);
Router::post('/user/edit',[UserController::class,'saveEdit']);
Router::get('/user/del',[UserController::class,'del']);
}else{
Router::get('/login',[AuthController::class,'login']);
}
Router::get('/user',[UserController::class,'listUser']);

//type
Router::get('/type',[CategoriController::class,'index']);
Router::get('/type/add',[CategoriController::class,'add']);
Router::post('/type/add',[CategoriController::class,'SaveAdd']);
Router::get('/type/del',[CategoriController::class,'del']);
Router::get('/type/edit',[CategoriController::class,'edit']);
Router::post('/type/edit',[CategoriController::class,'saveEdit']);
//blog
Router::get('/blog',[BlogController::class,'index']);
Router::get('/blog/add',[BlogController::class,'add']);
Router::post('/blog/add',[BlogController::class,'SaveAdd']);
Router::get('/blog/del',[BlogController::class,'del']);
Router::get('/blog/edit',[BlogController::class,'edit']);
Router::post('/blog/edit',[BlogController::class,'saveEdit']);
//Room
Router::get('/room',[RoomController::class,'index1']);
Router::get('/room/add',[RoomController::class,'add']);
Router::post('/room/add',[RoomController::class,'SaveAdd']);
Router::get('/room/del',[RoomController::class,'del']);
Router::get('/room/edit',[RoomController::class,'edit']);
Router::post('/room/edit',[RoomController::class,'saveEdit']);
//Login
Router::get('/register',[AuthController::class,'register']);
Router::post('/register',[AuthController::class,'saveRegister']);
Router::get('/login',[AuthController::class,'login']);
Router::post('/login',[AuthController::class,'saveLogin']);
Router::get('/logout',[AuthController::class,'logout']);
Router::run();