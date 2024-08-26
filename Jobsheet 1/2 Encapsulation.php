<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa {
    // Properti bersifat private sehingga hanya dapat diakses dari dalam kelas
    private $nama;
    private $nim;
    private $jurusan;

    // Konstruktor kelas yang digunakan untuk menginisialisasi properti ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menginisialisasi properti nama, nim, dan jurusan dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Getter untuk properti nama, mengembalikan nilai nama yang diawali dengan teks "Nama : "
    public function getNama() {
        return "Nama : " . $this->nama;
    }

    // Getter untuk properti nim, mengembalikan nilai nim yang diawali dengan teks "NIM : "
    public function getNim() {
        return "NIM : " . $this->nim;
    }

    // Getter untuk properti jurusan, mengembalikan nilai jurusan yang diawali dengan teks "Jurusan : "
    public function getJurusan() {
        return "Jurusan : " . $this->jurusan;
    }

    // Setter untuk mengubah nilai properti nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Setter untuk mengubah nilai properti nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Setter untuk mengubah nilai properti jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
}

// Membuat objek baru dari kelas Mahasiswa dengan nilai awal untuk nama, nim, dan jurusan
$mhs1 = new Mahasiswa("Ilham Budimansyah", "230302013", "Komputer dan Bisnis");

// Menampilkan nama mahasiswa dengan memanggil metode getNama()
echo $mhs1->getNama(). "<br>";

// Menampilkan nim mahasiswa dengan memanggil metode getNim()
echo $mhs1->getNim(). "<br>";

// Menampilkan jurusan mahasiswa dengan memanggil metode getJurusan()
echo $mhs1->getJurusan();
?>