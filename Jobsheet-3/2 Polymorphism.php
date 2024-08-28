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
    public $studentID;

    public function __construct($name, $studentID)
    {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentId()
    {
        return $this->studentID;
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

$murid = new Student ("Roxas", "1613");
echo $murid->getName();

echo "<br>";

$dosen = new Teacher ("Xehanort", "0101");
echo $dosen->getName();