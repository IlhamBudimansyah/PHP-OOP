<?php
// Definisi Class
abstract class Pengguna
{
    // Atribut atau Properties
    // Properti protected dapat diakses dari kelas ini dan kelas turunan
    protected $nama;

    // Constructor
    public function __construct()
    {
        // Konstruktor ini kosong, tetapi tetap didefinisikan untuk memungkinkan inisialisasi
    }

    // Metode atau Function
    // Metode ini digunakan untuk menetapkan nilai properti nama
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // Metode atau Function    
    // Metode ini digunakan untuk mengambil nilai properti nama
    public function getNama()
    {
        return $this->nama;
    }

    // Deklarasi metode abstrak
    // Metode ini wajib diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

// Definisi Class Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna
{
    // Constructor
    public function __construct()
    {
        // Memanggil konstruktor kelas induk, meskipun kosong, menjaga kemungkinan ekspansi di masa depan
        parent::__construct();
    }

    // Implementasi metode abstrak aksesFitur
    // Menampilkan nama dosen dan fitur yang dapat diakses oleh dosen
    public function aksesFitur()
    {
        echo $this->getNama() . ": fitur input nilai mahasiswa <br>";
    }
}

// Definisi Class Mahasiswa yang merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna
{
    // Constructor
    public function __construct()
    {
        // Memanggil konstruktor kelas induk, meskipun kosong
        parent::__construct();
    }

    // Implementasi metode abstrak aksesFitur
    // Menampilkan nama mahasiswa dan fitur yang dapat diakses oleh mahasiswa
    public function aksesFitur()
    {
        echo $this->getNama() . ": fitur lihat nilai <br>";
    }
}

// Pembuatan objek dari kelas Dosen
$dosen = new Dosen();
// Menetapkan nama untuk objek dosen
$dosen->setNama("Pak Riyadi");

// Pembuatan objek dari kelas Mahasiswa
$mhs = new Mahasiswa();
// Menetapkan nama untuk objek mahasiswa
$mhs->setNama("Ilham");

// Memanggil metode aksesFitur pada objek dosen
$dosen->aksesFitur();

// Memanggil metode aksesFitur pada objek mahasiswa
$mhs->aksesFitur();
?>