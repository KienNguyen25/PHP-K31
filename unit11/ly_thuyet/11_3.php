<?php
class DongVat  // Lớp Động vật
{
    // Thuộc Tính
    var $mat = '';
    var $mui = '';
    var $mieng = '';
    var $chan = '';
    var $gioitinh = '';
  
    // Hàm, phương thức
    function an(){
        echo "phương thức ăn";
    }
  
    function ngu(){
        // lệnh
    }
  
    function chay(){
        // lệnh
    }
  
    function lahet(){
        // lệnh
    }
}
class ConTrau extends DongVat {
    var $sung;
}

$contrau1 = new ConTrau();
$contrau1->an();
?>