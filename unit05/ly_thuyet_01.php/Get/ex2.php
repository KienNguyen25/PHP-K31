<?php
// $_GET = [
//     'name' => 'Kien',
//     'MSV' => 653335
// ];

echo "<pre>";
 print_r($_GET);
echo "</pre>";

if(isset($_GET['name'])){
    $name = $_GET['name'];
    echo "<br> Tôi là: ".$name;
}
// $name = $_GET['name'];
// echo "<br> Tôi là: ".$name;

?>