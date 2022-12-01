<?php
  session_start();
  $product = $_POST;

  $_SESSION['products'][] = $product;

  echo "<pre>";
      print_r($product);
  echo "</pre>";
  
  header('location: product_list.php');

?>