<?php
require_once '../vendor/autoload.php';
use App\Controllers\ProductController;
use App\Controllers\HomeController;
use App\Router;
Router::get('/',[HomeController::class,'index']);
Router::get('/rooms',[ProductController::class,'index']);
Router::get('/detail_room',[ProductController::class,'detail']);
Router::get('/detail',[ProductController::class,'show']);
Router::run();