<?php

// Mendefinisikan kelas Person
class Person
{
    // Properti yang dilindungi (hanya dapat diakses oleh kelas ini dan kelas turunannya)
    protected $name;

    // Metode yang dilindungi untuk mengembalikan nilai properti $name
    protected function getName()
    {
        return $this->name;
    }
}

// Mendefinisikan kelas Student yang merupakan turunan dari kelas Person
class Student extends Person
{
    // Properti publik yang dapat diakses dari luar kelas
    public $studentID;

    // Metode publik untuk mengembalikan nilai properti $studentID
    public function getStudentId()
    {
        return $this->studentID;
    }
}

// Membuat instance baru dari kelas Student
$murid = new Student();

// Menetapkan nilai '1613' ke properti studentID
$murid->studentID = "1613";

// Menampilkan nilai dari properti studentID dengan memanggil metode getStudentId
echo $murid->getStudentId();
?>