<?php
//    $ngoai = "cá biển";
  
//    function trong(){
//       $trong = "cá ở sông ngòi, ao, hồ";
//       echo " Tôi muốn câu " . $trong;
//       echo "<br> Tôi muốn câu " . $GLOBALS["ngoai"];
//    }
//   trong();

 $bien_cuc_bo = "đây là biến cục bộ";

 function bienToanCuc(){
     $bienToanCuc = " biến toàn cục";
     echo "sử dụng ".$bienToanCuc;
     echo "<br>Sử dụng ".$GLOBALS["bien_cuc_bo"];

 }
 bienToanCuc();
?>