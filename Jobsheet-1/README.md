# DOKUMENTASI OOP JOBSHEET 2
Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya

## Membuat Class dan Object
```php
<?php
// Definisi Class Mahasiswa
// Membuat kelas Mahasiswa yang merepresentasikan objek mahasiswa
class Mahasiswa 
{
    // Atribut atau Properties
    // Atribut ini bersifat public sehingga dapat diakses dari luar kelas
    public $nama;    // Properti yang menyimpan nama mahasiswa
    public $nim;     // Properti yang menyimpan nomor induk mahasiswa (NIM)
    public $jurusan; // Properti yang menyimpan jurusan mahasiswa

    // Metode atau Function
    // Metode ini menampilkan data mahasiswa dalam bentuk string
    public function tampilkanData()
    {
        // Mengembalikan string yang berisi informasi nama, nim, dan jurusan mahasiswa
        return "Nama : $this->nama <br> NIM : $this->nim <br> Jurusan : $this->jurusan";
    }
}

// Instansiasi Objek
// Membuat objek baru dari kelas Mahasiswa dan memberikan nilai awal untuk nama, nim, dan jurusan
// Namun, kode ini akan menghasilkan error karena kelas Mahasiswa tidak memiliki constructor yang sesuai.
$mhs1 = new Mahasiswa("Ilham Budimansyah", "230302013", "Komputer dan Bisnis");

// Memanggil metode tampilkanData untuk menampilkan data mahasiswa dan mencetaknya ke layar
echo $mhs1->tampilkanData();
?>
```
![Class and Object](Jobsheet-1/assets/MembuatClassAndObject.png)

## Implementasi Constructor
```php
<?php
// Mendefinisikan kelas Mahasiswa
class Mahasiswa 
{
    // Properti bersifat private sehingga hanya dapat diakses dari dalam kelas
    private $nama;      // Properti untuk menyimpan nama mahasiswa, aksesnya dibatasi hanya dalam kelas ini
    private $nim;       // Properti untuk menyimpan NIM mahasiswa, aksesnya dibatasi hanya dalam kelas ini
    private $jurusan;   // Properti untuk menyimpan jurusan mahasiswa, aksesnya dibatasi hanya dalam kelas ini

    // Konstruktor kelas yang digunakan untuk menginisialisasi properti ketika objek dibuat
    public function __construct($nama, $nim, $jurusan)
    {
        // Menginisialisasi properti nama, nim, dan jurusan dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;          // Mengatur properti $nama dengan nilai yang diterima dari parameter $nama
        $this->nim = $nim;            // Mengatur properti $nim dengan nilai yang diterima dari parameter $nim
        $this->jurusan = $jurusan;    // Mengatur properti $jurusan dengan nilai yang diterima dari parameter $jurusan
    }

    // Getter untuk properti nama, mengembalikan nilai nama yang diawali dengan teks "Nama : "
    public function getNama()
    {
        return "Nama : " . $this->nama;   // Mengembalikan teks yang berisi nama mahasiswa
    }

    // Getter untuk properti nim, mengembalikan nilai nim yang diawali dengan teks "NIM : "
    public function getNim()
    {
        return "NIM : " . $this->nim;     // Mengembalikan teks yang berisi NIM mahasiswa
    }

    // Getter untuk properti jurusan, mengembalikan nilai jurusan yang diawali dengan teks "Jurusan : "
    public function getJurusan()
    {
        return "Jurusan : " . $this->jurusan; // Mengembalikan teks yang berisi jurusan mahasiswa
    }

    // Setter untuk mengubah nilai properti nama
    public function setNama($nama)
    {
        $this->nama = $nama;  // Mengatur properti $nama dengan nilai baru yang diterima dari parameter $nama
    }

    // Setter untuk mengubah nilai properti nim
    public function setNim($nim)
    {
        $this->nim = $nim;    // Mengatur properti $nim dengan nilai baru yang diterima dari parameter $nim
    }

    // Setter untuk mengubah nilai properti jurusan
    public function setJurusan($jurusan)
    {
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
```
![Class and Object](Jobsheet-1/assets/Implementasi.png)

## Membuat Metode Tambahan
```php
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
        // Mengatur nilai atribut matkul
        $this->matkul = $matkul; // Inisialisasi properti $matkul dengan nilai parameter $matkul

        // Mengatur nilai atribut nama dengan memanggil konstruktor kelas induk
        parent::__construct($nama); // Memanggil konstruktor kelas induk (Pengguna) untuk mengatur nilai $nama
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
```
![Class and Object](Jobsheet-1/assets/MetodeTambahan.png)

## Penggunaan Atribut dan Metode
```php
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
```
![Class and Object](Jobsheet-1/assets/PenggunaanAtribut.png)

## TUGAS
```php

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
```
![Class and Object](Jobsheet-1/assets/Tugas.png)