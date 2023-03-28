<?php
$array_name = array('kien', 0,'CNTT', 9.5);
echo "demo: ".$array_name[2];

// var_dump($array_name);
// In ra kiểu dữ liệu của mảng

// print_r(array_name);
$array_c2 = array(
  0 => 'test c2',
  1 => '2001',
);
echo"<br>demo c2: ". $array_c2[1];

$array_c3 = array();
$array_c3[] = 'demo c3';
$array_c3[] = 'demo c3 phan tu 2';

// echo "<br> demo: ".$array_c3[1];
echo "<pre>";
   print_r($array_c3);
echo "</pre>";


$array_c4 = array();
$array_c4[0] = "demo c4";
$array_c4[2] = "demo c4 phan tu 2";
$array_c4[3] = "demo c4 phan tu 3";
echo "<pre>";
   print_r($array_c4);
echo "</pre>";
// array_splice($array_c4,1,2);

// echo "<br> demo: ".$array_c4[2];

$array_c5 = array();
$array_c5['MSV'] = 653335;
$array_c5['Ho va ten'] = 'Nguyen Huu Kien';
$array_c5['Lop'] = 'K65CNTTB';

// echo "<br>Ma Sinh vien: ". $array_c5['MSV'];
echo "<pre>";
   print_r($array_c5);
echo "</pre>";

// xóa phần tử 

// unset($array_c5['Lop']);



?>