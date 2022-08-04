<?php
require_once '../vendor/autoload.php';
use App\Controllers\ProductController;
use App\Controllers\HomeController;
use App\Controllers\AdminController;
use App\Controllers\UserListController;
use App\Router;
Router::get('/',[HomeController::class,'index']);
Router::get('/rooms',[ProductController::class,'index']);
Router::get('/detail_room',[ProductController::class,'detail']);
Router::get('/detail',[ProductController::class,'show']);
Router::get('/admin',[AdminController::class,'indexAdmin']);
Router::get('/user',[UserListController::class,'listUser']);
Router::run();