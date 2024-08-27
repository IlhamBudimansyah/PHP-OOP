<?php

// Definisi Kelas Pengguna
// Membuat kelas Pengguna yang merepresentasikan entitas umum dari pengguna
class Pengguna
{
    // Atribut protected, hanya dapat diakses oleh kelas ini dan kelas turunan
    protected $nama; // Properti yang menyimpan nama pengguna

    // Konstruktor untuk menginisialisasi atribut nama
    public function __construct($nama)
    {
        $this->nama = $nama; // Inisialisasi properti $nama dengan nilai parameter $nama
    }

    // Metode untuk mendapatkan nilai nama
    public function getNama()
    {
        return $this->nama; // Mengembalikan nilai properti $nama
    }

    // Metode untuk mengakses fitur, dapat di-overridden oleh kelas turunan
    public function aksesFitur()
    {
        return "Mengakses Fitur"; // Mengembalikan string default untuk akses fitur
    }
}

// Definisi Kelas Dosen yang merupakan turunan dari kelas Pengguna
// Kelas Dosen mewarisi properti dan metode dari kelas Pengguna
class Dosen extends Pengguna
{
    // Atribut private, hanya dapat diakses oleh kelas ini
    private $matkul; // Properti yang menyimpan mata kuliah yang diampu oleh dosen

    // Konstruktor untuk menginisialisasi atribut matkul dan nama
    // Konstruktor kelas induk dipanggil dengan parent::__construct($nama)
    public function __construct($nama, $matkul)
    {
        // Memanggil konstruktor kelas induk untuk menginisialisasi atribut nama
        parent::__construct($nama); // Mengatur nilai atribut $nama dengan memanggil konstruktor kelas induk (Pengguna)
        // Menginisialisasi atribut matkul
        $this->matkul = $matkul; // Inisialisasi properti $matkul dengan nilai parameter $matkul
    }

    // Override metode aksesFitur untuk memberikan fungsionalitas khusus bagi Dosen
    public function aksesFitur()
    {
        return "Edit Nilai"; // Mengembalikan string khusus untuk akses fitur dosen
    }

    // Metode untuk mendapatkan informasi dosen, termasuk nama dan mata kuliah yang diampu
    public function getDosen()
    {
        return "<br>Nama : " . $this->getNama() . "<br> Matkul : " . $this->matkul; 
        // Mengembalikan string yang berisi nama dosen dan mata kuliah yang diampu
        // Menggunakan metode getNama() untuk mendapatkan nilai $nama dari kelas induk
    }
}

// Definisi Kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
// Kelas Mahasiswa mewarisi properti dan metode dari kelas Pengguna
class Mahasiswa extends Pengguna
{
    // Konstruktor untuk menginisialisasi atribut nama
    // Konstruktor kelas induk dipanggil dengan parent::__construct($nama)
    public function __construct($nama)
    {
        // Memanggil konstruktor kelas induk untuk menginisialisasi atribut nama
        parent::__construct($nama); // Mengatur nilai atribut $nama dengan memanggil konstruktor kelas induk (Pengguna)
    }

    // Override metode aksesFitur untuk memberikan fungsionalitas khusus bagi Mahasiswa
    public function aksesFitur()
    {
        return "Lihat Nilai"; // Mengembalikan string khusus untuk akses fitur mahasiswa
    }
}

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen("Pak Riyadi", "Sistem Informasi Managemen");
// Objek ini mewakili seorang dosen dengan nama "Pak Riyadi" dan mata kuliah "Sistem Informasi Managemen"

// Memanggil metode aksesFitur untuk objek dosen dan mencetak hasilnya
echo "Fitur Dosen : " . $dosen->aksesFitur();
// Menampilkan fitur yang bisa diakses oleh dosen, yaitu "Edit Nilai"

// Instansiasi objek dari kelas Mahasiswa
$mhs = new Mahasiswa("Ilham");
// Objek ini mewakili seorang mahasiswa dengan nama "Ilham"

// Memanggil metode aksesFitur untuk objek mahasiswa dan mencetak hasilnya
echo "<br>Fitur Mahasiswa : " . $mhs->aksesFitur();
// Menampilkan fitur yang bisa diakses oleh mahasiswa, yaitu "Lihat Nilai"

// Memanggil metode getDosen untuk mendapatkan informasi dosen dan mencetak hasilnya
echo $dosen->getDosen();
// Menampilkan informasi dosen termasuk nama dan mata kuliah yang diampu
?>