<?php
class Student
{
    var $name;
    var $gender;
    var $dateOfBirth;
    var $address;

    function setStudentName($value)
    {
        $this->name = $value;
    }
    function getStudentName()
    {
        return $this->name;
    }

    function setStudentGender($value)
    {
        $this->gender = $value;
    }
    function getStudentGender()
    {
        return $this->gender;
    }

    function setStudentDateOfBirth($value)
    {
        $this->dateOfBirth = $value;
    }
    function getStudentDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    function setStudentAddress($value)
    {
        $this->address = $value;
    }
    function getStudentAddress()
    {
        return $this->address;
    }
}

$student = new Student();

// SET
$student->setStudentName('Nguyễn Hữu Kiên');
$student->setStudentGender('<br>Nam');
$student->setStudentDateOfBirth('<br>25/04/2002');
$student->setStudentAddress('<br>Hà Nội');

// GET
echo $student->getStudentName();
echo $student->getStudentGender();
echo $student->getStudentDateOfBirth();
echo $student->getStudentAddress();