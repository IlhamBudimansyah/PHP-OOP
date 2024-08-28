<?php

abstract class Person
{
    protected $name;
    protected $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    abstract public function getRole();
}

class Lecturer extends Person
{
    private $NIDN;

    public function __construct($name, $address, $NIDN)
    {
        parent::__construct($name, $address);
        $this->NIDN = $NIDN;
    }

    public function getNIDN()
    {
        return $this->NIDN;
    }

    public function getRole()
    {
        return "Lecturer:";
    }
}

class Student extends Person
{
    private $NIM;

    public function __construct($name, $address, $NIM)
    {
        parent::__construct($name, $address);
        $this->NIM = $NIM;
    }

    public function getNIM()
    {
        return $this->NIM;
    }

    public function getRole()
    {
        return "Student :";
    }
}

abstract class Journal
{
    protected $title;
    protected $writer;

    public function __construct($title, $writer)
    {
        $this->title = $title;
        $this->writer = $writer;
    }

    abstract public function SubmitJournal();
}

class JournalLecturer extends Journal
{
    private $bidangIlmu;

    public function __construct($title, Lecturer $writer, $bidangIlmu)
    {
        parent::__construct($title, $writer);
        $this->bidangIlmu = $bidangIlmu;
    }

    public function SubmitJournal()
    {
        return "Jurnal Dosen'{$this->title}' oleh {$this->writer->getName()} (NIDN : {$this->writer->getNIDN()}" . "Dalam bidang {$this->bidangIlmu} telah diajukan untuk publikasi.";
    }
}

class JournalStudent extends Journal
{
    private $StudyProgram;

    public function __construct($title, Student $writer, $StudyProgram)
    {
        parent::__construct($title, $writer);
        $this->StudyProgram = $StudyProgram;
    }

    public function SubmitJournal()
    {
        return "Jurnal Mahasiswa '{$this->title}' oleh {$this->writer->getName()} (NIM : {$this->writer->getNIM()} " . "Dari Program Studi {$this->StudyProgram} telah diajukan untuk review.";
    }
}

$dosen = new Lecturer("Roxas", "Twilight Town", "1613");
$mahasiswa = new Student("Sora", "Destiny Island", "230302013");

echo $dosen->getName() . " adalah " . $dosen->getRole() . "<br>";
echo $mahasiswa->getName() . " adalah " .  $mahasiswa->getRole() . "<br>";

$JurnalDosen = new JournalLecturer("Internet Cepat Buat Apa?", $dosen, "Ilmu Komputer");
echo $JurnalDosen->SubmitJournal() . "<br>";

$JurnalMahasiswa = new JournalStudent("Cara Menjadi Pro Player Mobile Legends", $mahasiswa, "Ilmu E-sport");
echo $JurnalMahasiswa->SubmitJournal() . "<br>";