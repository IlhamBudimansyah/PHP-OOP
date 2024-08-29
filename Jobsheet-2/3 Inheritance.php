<?php

// Definisi Kelas Pengguna
// Membuat kelas Pengguna yang merepresentasikan entitas dasar pengguna
class Pengguna 
{
    // Atribut protected, hanya bisa diakses oleh kelas ini dan kelas turunannya
    protected $nama; // Properti yang menyimpan nama pengguna

    // Konstruktor
    // Konstruktor ini digunakan untuk menginisialisasi atribut nama
    public function __construct($nama)
    {
        $this->nama = $nama; // Inisialisasi properti $nama dengan nilai parameter $nama
    }
    
    // Metode protected untuk mengambil nilai nama
    // Hanya bisa diakses dari dalam kelas ini atau dari kelas turunan
    protected function getNama() 
    {
        return $this->nama; // Mengembalikan nilai properti $nama
    }
}

// Definisi Kelas Dosen yang merupakan turunan dari kelas Pengguna
// Kelas Dosen mewarisi properti dan metode dari kelas Pengguna
class Dosen extends Pengguna
{
    // Atribut private, hanya bisa diakses oleh kelas ini
    private $matkul; // Properti yang menyimpan mata kuliah yang diampu oleh dosen

    // Konstruktor
    // Konstruktor ini digunakan untuk menginisialisasi atribut nama dan matkul
    public function __construct($nama, $matkul)
    {
        // Mengatur nilai atribut nama dengan memanggil konstruktor kelas induk
        parent::__construct($nama); // Memanggil konstruktor kelas induk (Pengguna) untuk mengatur nilai $nama
     
        // Mengatur nilai atribut matkul
        $this->matkul = $matkul; // Inisialisasi properti $matkul dengan nilai parameter $matkul
    }

    // Metode public untuk menampilkan informasi dosen
    public function getDosen()
    {
        // Mengembalikan string yang berisi nama dosen dan mata kuliah yang diampu
        return "Nama : " . $this->getNama() . "<br> Matkul : " . $this->matkul;
        // Menggunakan metode getNama() dari kelas Pengguna untuk mengambil nilai $nama
    }
}

// Instansiasi objek dari kelas Dosen
// Objek ini mewakili seorang dosen dengan nama "Pak Riyadi" dan mata kuliah "Sistem Informasi Managemen"
$dosen = new Dosen("Pak Riyadi", "Sistem Informasi Managemen");

// Memanggil metode getDosen untuk menampilkan informasi dosen
echo $dosen->getDosen(); // Menampilkan informasi dosen ke layar
?>