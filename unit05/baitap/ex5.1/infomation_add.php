<?php

  session_start();
   $info = $_POST;

   $_SESSION['information'][] = $info;

   header('location: info_list.php');


?>