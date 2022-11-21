<?php
  $mod = $_GET['mod'] ?? 'category';
  $act = $_GET['act'] ?? 'index';

  if(!isset($_GET['mod'])){
    echo "Tham so mod khong ton tai";
    exit();

  }
  if(!isset($_GET['act'])){
    echo "Tham so act khong ton tai";
    exit();

  }
   
  $controller_name = ucfirst($mod) . "Controller";
  require_once "./Controllers/" . $controller_name . ".php";

  $controller = new $controller_name();
  $controller->$act();

  $path = "./Controllers" . $controller_name . ".php";
  if (!file_exists($path)){
    // Dieu Kien Khong Co File
    echo " File $path khong ton tai";
    exit();
  }

  $controller_obj = new $controller_name();
  if (!method_exists($controller_obj, $act)){
    // Dieu khong co method
    echo "Method $act() Khong ton tai";
    exit();
  }
  $controller->$act();
?>