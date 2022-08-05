<?php
require_once '../commons/utlis.php';
require_once '../vendor/autoload.php';
use App\Controllers\RoomController;
use App\Controllers\HomeController;
use App\Controllers\AdminController;
use App\Controllers\CategoriController;
use App\Controllers\UserListController;
use App\Controllers\ContactController;
use App\Router;
Router::get('/',[HomeController::class,'index']);
Router::get('/rooms',[RoomController::class,'index']);
Router::get('/detail_room',[RoomController::class,'detail']);
//admin
Router::get('/admin',[AdminController::class,'indexAdmin']);
//user
Router::get('/user',[UserListController::class,'listUser']);
//type
Router::get('/type',[CategoriController::class,'index']);
Router::get('/type/add',[CategoriController::class,'add']);
Router::post('/type/add',[CategoriController::class,'SaveAdd']);
Router::get('/type/del',[CategoriController::class,'del']);
Router::get('/type/edit',[CategoriController::class,'edit']);
Router::post('/type/edit',[CategoriController::class,'saveEdit']);
//contact 
Router::get('/contact',[ContactController::class,'LisContact']);
//room
Router::get('/rooms',[RoomController::class,'listAd']);
Router::get('/rooms/add',[RoomController::class,'addAd']);
Router::post('/rooms/add',[RoomController::class,'SaveaddAd']);
Router::get('/rooms/update',[RoomController::class,'update']);
Router::run();