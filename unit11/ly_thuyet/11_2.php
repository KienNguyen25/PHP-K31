<?php
   class oto           //class
   { 
       var $ten;      //thuộc tính
       var $mau;
       var $so_cho;
       
       function chay(){    //Phương thức
           echo "<br>Đây là phương thức chay của lớp ô tô";
       }
   }
  
   // Gán giá tri
   $audi = new Oto(); // Khởi tạo đối tượng mới từ lớp 

   $audi->ten = "Mazda 6";
   $audi->mau = "Trắng";
  
   // In ra thông tin của xe
   echo "<br>Đây là hãng xe: ".$audi->ten;
   echo "<br>Xe có màu: ".$audi->mau;

   // Gọi phương thức của lớp
   $audi->chay(); // Gọi phương thức chạy của lớp xe

   //---------------------KẾ THừa------------------------
   //Khi một class có phương thức khởi tạo từ một class cũng có phương thức khởi tạo thì phương thức khởi tạo sẽ được kế thừa.
   class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        echo 'Class Foo được khởi tạo';
    }
}

$foo = new Foo();
//Kết quả: Class Foo được khởi tạo

//Nếu như bạn muốn sử dụng được phương thức khởi tạo trong class cha thì bạn chỉ cần gọi lại phương thức đó của lớp cha.

class Bar
{
    public function __construct()
    {
        echo 'Class Bar được khởi tạo';
    }
}

class Foo extends Bar
{
    public function __construct()
    {
        //gọi phương thức khởi tạo của class cha
        parent::__construct();
        echo 'Class Foo được khởi tạo';
    }
}

$foo = new Foo();
//Kết quả: Class Bar được khởi tạo
//Kết quả: Class Foo được khởi tạ


class car {
   var $tenxe;
   var $hang_xe;
   var $mau;
   var $so_cho;

}

?>
