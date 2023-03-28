<?php

function cong($a,$b,$c=FALSE){
    $tong = $a+$b;
    if($c != FALSE){
        $tong += $c;
    }
    return $tong;
}
 $tong = cong(10,20,40);
 $lang = $_GET['lang'];
 if($lang == 'vi'){
    echo "Tong: ".$tong;
 }else if($lang == 'eng'){
    echo "Sum: ".$tong;
 }else if($lang == 'kr'){
    echo "KR: ".$tong;
 }else{

 }

?>