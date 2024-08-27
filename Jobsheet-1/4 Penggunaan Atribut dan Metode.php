<?php
// Definisi Class Mahasiswa
// Membuat kelas Mahasiswa yang merepresentasikan entitas mahasiswa
class Mahasiswa 
{
    // Atribut atau Properties
    // Atribut ini bersifat public sehingga dapat diakses dari luar kelas
    public $nama;    // Properti yang menyimpan nama mahasiswa
    public $nim;     // Properti yang menyimpan nomor induk mahasiswa (NIM)
    public $jurusan; // Properti yang menyimpan jurusan mahasiswa

    // Constructor
    // Constructor ini digunakan untuk menginisialisasi objek dengan nilai awal untuk nama, nim, dan jurusan
    public function __construct($nama, $nim, $jurusan)
    {
        // Mengatur nilai properti berdasarkan parameter yang diterima
        $this->nama = $nama;       // Inisialisasi properti $nama dengan nilai parameter $nama
        $this->nim = $nim;         // Inisialisasi properti $nim dengan nilai parameter $nim
        $this->jurusan = $jurusan; // Inisialisasi properti $jurusan dengan nilai parameter $jurusan
    }

    // Metode atau Function
    // Metode ini menampilkan data mahasiswa dalam bentuk string
    public function tampilkanData()
    {
        // Mengembalikan string yang berisi informasi nama, nim, dan jurusan mahasiswa
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }

    // Metode untuk mengubah jurusan mahasiswa
    public function updateJurusan($jurusan)
    {
        // Mengubah nilai $jurusan dengan parameter $jurusan baru yang diberikan
        $this->jurusan = $jurusan;
    }

    // Metode untuk mengubah NIM mahasiswa
    public function setNim($nimbaru)
    {
        // Mengubah nilai $nim dengan parameter $nimbaru yang diberikan
        $this->nim = $nimbaru;
    }
}

// Instansiasi Objek
// Membuat objek baru dari kelas Mahasiswa dan memberikan nilai awal untuk nama, nim, dan jurusan
$mhs1 = new Mahasiswa("Ilham Budimansyah", "230302013", "Komputer dan Bisnis");

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa dan mencetaknya ke layar
echo $mhs1->tampilkanData(); // Menampilkan data mahasiswa pertama kali

echo "<br> <br> Setelah update data <br> <br>"; // Menampilkan pesan setelah perubahan data

// Mengubah NIM mahasiswa menggunakan metode setNim
$mhs1->setNim("230302022"); // Mengubah NIM dari "230302013" menjadi "230302022"

// Mengubah jurusan mahasiswa menggunakan metode updateJurusan
$mhs1->updateJurusan("Teknik Elektro"); // Mengubah jurusan dari "Komputer dan Bisnis" menjadi "Teknik Elektro"

// Menampilkan data mahasiswa setelah perubahan
echo $mhs1->tampilkanData(); // Menampilkan data mahasiswa yang telah diperbarui
?>