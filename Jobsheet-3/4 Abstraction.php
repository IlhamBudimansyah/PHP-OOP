<?php

// Mendefinisikan kelas abstrak Course
abstract class Course
{
    // Mendeklarasikan metode abstrak yang harus diimplementasikan oleh kelas turunannya
    abstract public function getCourseDetails();
}

// Mendefinisikan kelas OnlineCourse sebagai turunan dari kelas Course
class OnlineCourse extends Course
{
    // Properti privat yang hanya dapat diakses di dalam kelas ini saja
    private $courseName;
    private $platform;

    // Konstruktor untuk menginisialisasi nilai properti $courseName dan $platform
    public function __construct($courseName, $platform)
    {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    // Mengimplementasikan metode abstrak dari kelas Course
    public function getCourseDetails()
    {
        return "Online Course : " . $this->courseName . ", Platform : " . $this->platform;
    }
}

// Mendefinisikan kelas OfflineCourse sebagai turunan dari kelas Course
class OfflineCourse extends Course
{
    // Properti privat yang hanya dapat diakses di dalam kelas ini saja
    private $courseName;
    private $location;

    // Konstruktor untuk menginisialisasi nilai properti $courseName dan $location
    public function __construct($courseName, $location)
    {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    // Mengimplementasikan metode abstrak dari kelas Course
    public function getCourseDetails()
    {
        return "Offline Course : " . $this->courseName . ", Location : " . $this->location;
    }
}

// Membuat instance baru dari kelas OnlineCourse
$online = new OnlineCourse("Bahasa Inggris", "Zoom");
// Memanggil metode getCourseDetails dan menyimpan hasilnya ke variabel $data_online
$data_online = $online->getCourseDetails();
// Menampilkan detail kursus online
echo $data_online;

echo "<br>";

// Membuat instance baru dari kelas OfflineCourse
$offline = new OfflineCourse("Bahasa Inggris Grammar", "Cilacap");
// Menampilkan detail kursus offline
echo $offline->getCourseDetails();
?>