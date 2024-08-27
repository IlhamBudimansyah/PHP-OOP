<?php
// Definisi Class Dosen
// Membuat kelas Dosen yang merepresentasikan entitas dosen
class Dosen
{
    // Atribut atau Properties
    // Atribut ini bersifat public sehingga dapat diakses dari luar kelas
    public $nama;        // Properti yang menyimpan nama dosen
    public $nip;         // Properti yang menyimpan nomor induk pegawai (NIP) dosen
    public $mataKuliah;  // Properti yang menyimpan mata kuliah yang diampu oleh dosen

    // Constructor
    // Constructor ini digunakan untuk menginisialisasi objek dengan nilai awal untuk nama, nip, dan mata kuliah
    public function __construct($nama, $nip, $mataKuliah)
    {
        // Mengatur nilai properti berdasarkan parameter yang diterima
        $this->nama = $nama;              // Inisialisasi properti $nama dengan nilai parameter $nama
        $this->nip = $nip;                // Inisialisasi properti $nip dengan nilai parameter $nip
        $this->mataKuliah = $mataKuliah;  // Inisialisasi properti $mataKuliah dengan nilai parameter $mataKuliah
    }

    // Metode atau Function
    // Metode ini menampilkan data dosen dalam bentuk string
    public function tampilkanDosen()
    {
        // Mengembalikan string yang berisi informasi nama, NIP, dan mata kuliah dosen
        return "Nama : $this->nama <br> NIP : $this->nip <br> Mata Kuliah : $this->mataKuliah";
    }
}

// Instansiasi Objek
// Membuat objek baru dari kelas Dosen dan memberikan nilai awal untuk nama, NIP, dan mata kuliah
$dosen = new Dosen("Pak Riyadi", "123456123", "Sistem Informasi Managemen");

// Memanggil metode tampilkanDosen untuk menampilkan data dosen dan mencetaknya ke layar
echo $dosen->tampilkanDosen();
?>