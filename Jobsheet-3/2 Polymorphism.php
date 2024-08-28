<?php

// Mendefinisikan kelas Person
class Person
{
    // Properti yang dilindungi, hanya dapat diakses di dalam kelas ini dan kelas turunannya
    protected $name;

    // Konstruktor kelas Person untuk menetapkan nilai properti $name
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Metode dilindungi untuk mengembalikan nilai dari properti $name
    protected function getName()
    {
        return $this->name;
    }
}

// Mendefinisikan kelas Student sebagai turunan dari kelas Person
class Student extends Person
{
    // Properti publik yang dapat diakses dari luar kelas
    public $studentID;

    // Konstruktor kelas Student untuk menetapkan nilai properti $name dan $studentID
    public function __construct($name, $studentID)
    {
        // Memanggil konstruktor parent (kelas induk) untuk menetapkan nilai $name
        parent::__construct($name);
        // Menetapkan nilai $studentID
        $this->studentID = $studentID;
    }

    // Metode publik untuk mengembalikan nilai properti $studentID
    public function getStudentId()
    {
        return $this->studentID;
    }

    // Metode publik untuk mengembalikan nama yang diubah dengan prefix "Student : "
    public function getName()
    {
        return "Student : " . $this->name;
    }
}

// Mendefinisikan kelas Teacher sebagai turunan dari kelas Person
class Teacher extends Person
{
    // Properti privat yang hanya dapat diakses di dalam kelas ini saja
    private $teacherID;

    // Konstruktor kelas Teacher untuk menetapkan nilai properti $name dan $teacherID
    public function __construct($name, $teacherID)
    {
        // Memanggil konstruktor parent (kelas induk) untuk menetapkan nilai $name
        parent::__construct($name);
        // Menetapkan nilai $teacherID
        $this->teacherID = $teacherID;
    }

    // Metode publik untuk mengembalikan nama yang diubah dengan prefix "Teacher : "
    public function getName()
    {
        return "Teacher : " . $this->name;
    }
}

// Membuat instance baru dari kelas Student
$murid = new Student("Roxas", "1613");
// Menampilkan nama dengan prefix "Student : "
echo $murid->getName();

echo "<br>";

// Membuat instance baru dari kelas Teacher
$dosen = new Teacher("Xehanort", "0101");
// Menampilkan nama dengan prefix "Teacher : "
echo $dosen->getName();
?>