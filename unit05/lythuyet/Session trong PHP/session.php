<?php
//   session_start();
//   $_SESSION['name'] = "Kien";

//   $info1 = array();
//   $info1['id'] = "29";
//   $info1['MSV'] = "653335";
//   $info1['Ho ten'] = "Nguyen Huu Kien";
//   $info1['Lop'] = "K65CNTTB";

//   $_SESSION['info'] = $info1;

//   echo "<pre>";
//    print_r( $_SESSION);
//   echo "<pre>";
   
//   echo "<br>".$_SESSION['info']['Ho ten'];

//   unset($_SESSION['name']);  
//   echo "<pre>";
//   print_r( $_SESSION);
//  echo "<pre>";

//  session_destroy(); 

session_start();

$_SESSION['name'] = "kien";

echo "<br> TÊN: ".$_SESSION['name'];

$info = array();
$info['MSV'] = "653335";
$info['Lop'] = "K65CNTTB";
$info['KHOA'] = "CNTT";
$info['Ho ten'] = "Nguyen Huu Kien";
$info['Khóa học'] = "2020-2024";

$_SESSION['demo'] = $info;

echo "<pre>";
   print_r($_SESSION);
echo "</pre>";

unset($_SESSION['name']);

echo "<br>".$_SESSION['demo']['Lop'];
echo "<pre>";
   print_r($_SESSION);
echo "</pre>";

// session_start();

// session_destroy();
?>