<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    protected function getName()
    {
        return $this->name;
    }
}

class Student extends Person
{
    private $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentId()
    {
        return $this->studentID;
    }

    public function setStudentId($id)
    {
        $this->studentID = $id;
    }

    public function getName()
    {
        return "Student : " . $this->name;
    }
}

class Teacher extends Person
{
    private $teacherID;

    public function __construct($name, $teacherID)
    {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName()
    {
        return "Teacher : " . $this->name;
    }
}

$mhs = new Student("Roxas", "230302013");
echo "ID : " . $mhs->getStudentId();

$mhs->setStudentId("1613");
echo "<br> ID : " . $mhs->getStudentId();