<?php

class Person
{
    protected $name;

    protected function getName()
    {
        return $this->name;
    }
}

class Student extends Person
{
    public $studentID;

    public function getStudentId()
    {
        return $this->studentID;
    }
}

$murid = new Student();
$murid->studentID = "1613";
echo $murid->getStudentId();