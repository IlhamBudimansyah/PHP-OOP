<?php

// Mendefinisikan kelas abstrak Person
abstract class Person
{
    // Properti yang dilindungi, hanya dapat diakses di dalam kelas ini dan kelas turunannya
    protected $name;
    protected $address;

    // Konstruktor untuk menginisialisasi properti $name dan $address
    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    // Metode publik untuk mendapatkan nilai dari properti $name
    public function getName()
    {
        return $this->name;
    }

    // Metode publik untuk mendapatkan nilai dari properti $address
    public function getAddress()
    {
        return $this->address;
    }

    // Mendeklarasikan metode abstrak yang harus diimplementasikan oleh kelas turunannya
    abstract public function getRole();
}

// Mendefinisikan kelas Lecturer sebagai turunan dari kelas Person
class Lecturer extends Person
{
    // Properti privat untuk menyimpan NIDN dosen
    private $NIDN;

    // Konstruktor untuk menginisialisasi properti $name, $address, dan $NIDN
    public function __construct($name, $address, $NIDN)
    {
        // Memanggil konstruktor kelas induk untuk mengatur nilai $name dan $address
        parent::__construct($name, $address);
        $this->NIDN = $NIDN;
    }

    // Metode publik untuk mendapatkan nilai dari properti $NIDN
    public function getNIDN()
    {
        return $this->NIDN;
    }

    // Mengimplementasikan metode abstrak getRole dari kelas Person
    public function getRole()
    {
        return "Lecturer:";
    }
}

// Mendefinisikan kelas Student sebagai turunan dari kelas Person
class Student extends Person
{
    // Properti privat untuk menyimpan NIM mahasiswa
    private $NIM;

    // Konstruktor untuk menginisialisasi properti $name, $address, dan $NIM
    public function __construct($name, $address, $NIM)
    {
        // Memanggil konstruktor kelas induk untuk mengatur nilai $name dan $address
        parent::__construct($name, $address);
        $this->NIM = $NIM;
    }

    // Metode publik untuk mendapatkan nilai dari properti $NIM
    public function getNIM()
    {
        return $this->NIM;
    }

    // Mengimplementasikan metode abstrak getRole dari kelas Person
    public function getRole()
    {
        return "Student :";
    }
}

// Mendefinisikan kelas abstrak Journal
abstract class Journal
{
    // Properti yang dilindungi untuk menyimpan judul dan penulis jurnal
    protected $title;
    protected $writer;

    // Konstruktor untuk menginisialisasi properti $title dan $writer
    public function __construct($title, $writer)
    {
        $this->title = $title;
        $this->writer = $writer;
    }

    // Mendeklarasikan metode abstrak yang harus diimplementasikan oleh kelas turunannya
    abstract public function SubmitJournal();
}

// Mendefinisikan kelas JournalLecturer sebagai turunan dari kelas Journal
class JournalLecturer extends Journal
{
    // Properti privat untuk menyimpan bidang ilmu dosen
    private $bidangIlmu;

    // Konstruktor untuk menginisialisasi properti $title, $writer, dan $bidangIlmu
    public function __construct($title, Lecturer $writer, $bidangIlmu)
    {
        // Memanggil konstruktor kelas induk untuk mengatur nilai $title dan $writer
        parent::__construct($title, $writer);
        $this->bidangIlmu = $bidangIlmu;
    }

    // Mengimplementasikan metode abstrak SubmitJournal dari kelas Journal
    public function SubmitJournal()
    {
        return "Jurnal Dosen '{$this->title}' oleh {$this->writer->getName()}, NIDN : <b>{$this->writer->getNIDN()}</b>" . " Dalam bidang {$this->bidangIlmu} telah diajukan untuk publikasi.";
    }
}

// Mendefinisikan kelas JournalStudent sebagai turunan dari kelas Journal
class JournalStudent extends Journal
{
    // Properti privat untuk menyimpan program studi mahasiswa
    private $StudyProgram;

    // Konstruktor untuk menginisialisasi properti $title, $writer, dan $StudyProgram
    public function __construct($title, Student $writer, $StudyProgram)
    {
        // Memanggil konstruktor kelas induk untuk mengatur nilai $title dan $writer
        parent::__construct($title, $writer);
        $this->StudyProgram = $StudyProgram;
    }

    // Mengimplementasikan metode abstrak SubmitJournal dari kelas Journal
    public function SubmitJournal()
    {
        return "Jurnal Mahasiswa '{$this->title}' oleh {$this->writer->getName()}, NIM : <b>{$this->writer->getNIM()}</b>" . " Dari Program Studi {$this->StudyProgram} telah diajukan untuk review.";
    }
}

// Membuat instance baru dari kelas Lecturer
$dosen = new Lecturer("Sora", "Destiny Island", "230302013");

// Membuat instance baru dari kelas Student
$mahasiswa = new Student("Roxas", "Twilight Town", "230301613");

// Menampilkan nama dan peran dosen
echo $dosen->getName() . " adalah " . $dosen->getRole() . "<br>";

// Menampilkan nama dan peran mahasiswa
echo $mahasiswa->getName() . " adalah " . $mahasiswa->getRole() . "<br>";

// Membuat instance baru dari kelas JournalLecturer
$JurnalDosen = new JournalLecturer("Internet Cepat Buat Apa?", $dosen, "Ilmu Komputer");

// Menampilkan detail jurnal dosen
echo $JurnalDosen->SubmitJournal() . "<br>";

// Membuat instance baru dari kelas JournalStudent
$JurnalMahasiswa = new JournalStudent("Cara Menjadi Pro Player Mobile Legends", $mahasiswa, "Ilmu E-sport");

// Menampilkan detail jurnal mahasiswa
echo $JurnalMahasiswa->SubmitJournal() . "<br>";
?>