<?php
$array_name = array('kien',9.5,'php');
// echo "<pre>";
//    print_r($array_name);
// echo "</pre>";

$array_name1 = array();
$array_name1['MSV'] = 653335;
$array_name1['Ho va ten'] = 'Nguyen Huu Kien';
$array_name1['Lop'] = 'K65CNTTB';

foreach ($array_name1 as $key => $value ){
   echo "<br>key: ".$key." value: ".$value."";
}

// foreach($array_name1 as $giatri){
//     echo "<br>Gia tri: ".$giatri;
// }
$array_info = array();
$array_info['MSV'] = 653335;
$array_info['Ho va ten'] = 'Nguyen Huu Kien';
$array_info['Lop'] = 'K65CNTTB';

foreach($array_info as $key => $value){
    echo "<br> Key: ".$key." Value: ".$value." ";
}
?>