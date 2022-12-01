<?php
  $product = $_POST;
  
  session_start();
  //kiem tra
 if(!(isset($_SESSION['isLogin']) && $_SESSION['isLogin']==1)){
  header('location: login.php');
}

  $_SESSION['products'][] = $product;
 
  header('location: product_list.php');

?>
