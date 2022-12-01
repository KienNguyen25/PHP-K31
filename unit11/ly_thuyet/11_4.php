<?php
class Person
{
    //khai báo thuộc tính name ở private
    private $name;

    //Khai báo phương thức run ở private
    private function run()
    {
        return '<br>Đây là hàm run';
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function getRunMethod()
    {
        return $this->run();
    }
}

//Khởi tạo class
$person = new Person();
//set thuộc tính name
$person->setName('<br>Nguyễn Hữu Kiên');
//Lấy ra thuộc tính name
echo $person->getName();
//Gọi giá trị của phương thức run
echo $person->getRunMethod();



//-------------------------PROTECTED---------------------

class Person
{
    //khai báo thuộc tính xe dạng protected
    protected $name;
}

class Male extends Person
{
    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}

//khởi tạo lớp Person
$person = new Person();
//Sai vì biến name có visibility là protect nên không tác động từ ngoài class vào được
// $person->name;
//khởi tạo lớp Male
$male = new Male();
//tác động vào biến name qua hàm setName
$male->setName('<br>Nguyễn Hữu Kiên 2');
echo $male->getName();


//--------------------------------Public--------------------------------
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;

    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}

//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person->name = 'Nguyen Cong';
//tác động vào biến name qua hàm setName
$person->setName('Nguyen Cong Hoan');
echo $person->getName();

?>



