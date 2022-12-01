<?php
    
    class car {          //Lớp
         var $hang_xe;       //thuộc tính
         var $mau_xe;
         var $so_cho;
        
        function chay(){             //phương thức
            echo "<br> Xe  can` do xang";
        }

        function mau(){
            echo "<br> Xe  có màu xanh đen";
        }
    }
 
    $bmw = new car;       //đối tượng tạo ra bởi lớp
    $bmw->mau_xe = 'Đen Trắng';        //gán giá trị
    $bmw->so_cho = 'xe ô tô 4 chỗ';
    $bmw->hang_xe = 'BMW i8';

    echo "<br>Hãng xe ô tô này là: ".$bmw->hang_xe;    //in ra thuộc tính

    $bmw->mau();    // in ra phương thức
    $bmw->chay(); 

    class xe_may extends car{          //kế thừa
        var $xe_may;
        var $ten_xe;
    }

    $wave = new xe_may;

    $wave->chay();
    $wave->mau();
    $wave->ten_xe = 'SH 180i';
    echo "<br> Xe".$wave->ten_xe;
    echo "<br>xe máy có màu: ".$bmw->mau_xe;

    // -----------------------------------------------------------------


    class Person {
        private $name;
        
        function setName($name){
            $this->name = $name;
        }
        function getName(){
            return $this->name;
        }

        
        private function run(){
              return "<br> Đây là hàm run";
        }
    }

    $person = new Person;
    
    //gọi thuộc tính name
    $person->setName("Kiên");
    echo "<br>Tên".$person->name;
?>