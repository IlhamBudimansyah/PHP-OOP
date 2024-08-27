<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa 
{
    // Properti bersifat private sehingga hanya dapat diakses dari dalam kelas
    private $nama;      // Properti untuk menyimpan nama mahasiswa, aksesnya dibatasi hanya dalam kelas ini
    private $nim;       // Properti untuk menyimpan NIM mahasiswa, aksesnya dibatasi hanya dalam kelas ini
    private $jurusan;   // Properti untuk menyimpan jurusan mahasiswa, aksesnya dibatasi hanya dalam kelas ini

    // Konstruktor kelas yang digunakan untuk menginisialisasi properti ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        // Menginisialisasi properti nama, nim, dan jurusan dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;          // Mengatur properti $nama dengan nilai yang diterima dari parameter $nama
        $this->nim = $nim;            // Mengatur properti $nim dengan nilai yang diterima dari parameter $nim
        $this->jurusan = $jurusan;    // Mengatur properti $jurusan dengan nilai yang diterima dari parameter $jurusan
    }

    // Getter untuk properti nama, mengembalikan nilai nama yang diawali dengan teks "Nama : "
    public function getNama() {
        return "Nama : " . $this->nama;   // Mengembalikan teks yang berisi nama mahasiswa
    }

    // Getter untuk properti nim, mengembalikan nilai nim yang diawali dengan teks "NIM : "
    public function getNim() {
        return "NIM : " . $this->nim;     // Mengembalikan teks yang berisi NIM mahasiswa
    }

    // Getter untuk properti jurusan, mengembalikan nilai jurusan yang diawali dengan teks "Jurusan : "
    public function getJurusan() {
        return "Jurusan : " . $this->jurusan; // Mengembalikan teks yang berisi jurusan mahasiswa
    }

    // Setter untuk mengubah nilai properti nama
    public function setNama($nama) {
        $this->nama = $nama;  // Mengatur properti $nama dengan nilai baru yang diterima dari parameter $nama
    }

    // Setter untuk mengubah nilai properti nim
    public function setNim($nim) {
        $this->nim = $nim;    // Mengatur properti $nim dengan nilai baru yang diterima dari parameter $nim
    }

    // Setter untuk mengubah nilai properti jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;  // Mengatur properti $jurusan dengan nilai baru yang diterima dari parameter $jurusan
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