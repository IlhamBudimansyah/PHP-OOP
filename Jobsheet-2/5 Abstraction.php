<?php
// Definisi Class
// Kelas Pengguna adalah kelas abstrak yang tidak dapat diinstansiasi secara langsung
// Kelas ini menyediakan metode dan properti umum untuk kelas-kelas turunannya
abstract class Pengguna
{
    // Atribut atau Properties
    // Properti protected dapat diakses dari kelas ini dan kelas turunannya
    protected $nama; // Menyimpan nama pengguna

    // Constructor
    // Konstruktor ini kosong, tetapi tetap didefinisikan untuk memungkinkan inisialisasi di masa depan
    public function __construct()
    {
        // Kosong, tetapi bisa diisi jika diperlukan untuk ekspansi di masa depan
    }

    // Metode atau Function
    // Metode ini digunakan untuk menetapkan nilai properti nama
    public function setNama($nama)
    {
        $this->nama = $nama; // Mengatur nilai properti $nama
    }

    // Metode atau Function    
    // Metode ini digunakan untuk mengambil nilai properti nama
    public function getNama()
    {
        return $this->nama; // Mengembalikan nilai properti $nama
    }

    // Deklarasi metode abstrak
    // Metode ini wajib diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

// Definisi Class Dosen yang merupakan turunan dari kelas Pengguna
// Kelas ini mewarisi semua properti dan metode dari kelas Pengguna
class Dosen extends Pengguna
{
    // Constructor
    // Memanggil konstruktor kelas induk, meskipun kosong, untuk menjaga kemungkinan ekspansi di masa depan
    public function __construct()
    {
        parent::__construct(); // Memanggil konstruktor kelas induk (Pengguna)
    }

    // Implementasi metode abstrak aksesFitur
    // Menampilkan nama dosen dan fitur yang dapat diakses oleh dosen
    public function aksesFitur()
    {
        echo $this->getNama() . ": fitur input nilai mahasiswa <br>"; // Menampilkan informasi fitur yang dapat diakses oleh dosen
    }
}

// Definisi Class Mahasiswa yang merupakan turunan dari kelas Pengguna
// Kelas ini mewarisi semua properti dan metode dari kelas Pengguna
class Mahasiswa extends Pengguna
{
    // Constructor
    // Memanggil konstruktor kelas induk, meskipun kosong, untuk menjaga kemungkinan ekspansi di masa depan
    public function __construct()
    {
        parent::__construct(); // Memanggil konstruktor kelas induk (Pengguna)
    }

    // Implementasi metode abstrak aksesFitur
    // Menampilkan nama mahasiswa dan fitur yang dapat diakses oleh mahasiswa
    public function aksesFitur()
    {
        echo $this->getNama() . ": fitur lihat nilai <br>"; // Menampilkan informasi fitur yang dapat diakses oleh mahasiswa
    }
}

// Pembuatan objek dari kelas Dosen
$dosen = new Dosen(); // Membuat objek baru dari kelas Dosen

// Menetapkan nama untuk objek dosen
$dosen->setNama("Pak Riyadi"); // Mengatur nama dosen

// Pembuatan objek dari kelas Mahasiswa
$mhs = new Mahasiswa(); // Membuat objek baru dari kelas Mahasiswa

// Menetapkan nama untuk objek mahasiswa
$mhs->setNama("Ilham"); // Mengatur nama mahasiswa

// Memanggil metode aksesFitur pada objek dosen
$dosen->aksesFitur(); // Menampilkan fitur yang dapat diakses oleh dosen

// Memanggil metode aksesFitur pada objek mahasiswa
$mhs->aksesFitur(); // Menampilkan fitur yang dapat diakses oleh mahasiswa
?>