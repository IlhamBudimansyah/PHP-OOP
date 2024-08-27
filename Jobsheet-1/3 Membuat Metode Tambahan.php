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
    // Metode ini mengupdate nilai properti $jurusan dengan nilai yang baru
    public function updateJurusan($jurusan)
    {
        $this->jurusan = $jurusan; // Mengubah nilai $jurusan dengan parameter $jurusan baru yang diberikan
    }
}

// Instansiasi Objek
// Membuat objek baru dari kelas Mahasiswa dan memberikan nilai awal untuk nama, nim, dan jurusan
$mhs1 = new Mahasiswa("Ilham Budimansyah", "230302013", "Komputer dan Bisnis");

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa dan mencetaknya ke layar
echo $mhs1->tampilkanData(); // Menampilkan data mahasiswa pertama kali

echo "<br> <br> Setelah update jurusan <br> <br>"; // Menampilkan pesan setelah perubahan jurusan

// Memanggil metode updateJurusan untuk mengubah jurusan mahasiswa
$mhs1->updateJurusan("Teknik Elektro"); // Mengubah jurusan dari "Komputer dan Bisnis" menjadi "Teknik Elektro"

echo $mhs1->tampilkanData(); // Menampilkan data mahasiswa setelah jurusan diubah
?>