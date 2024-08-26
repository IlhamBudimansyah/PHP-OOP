<?php 

class Mahasiswa{
    public $nim;
    public $nama;
    public $jurusan;

    public function setNama($data){
        $this->nama = $data;
    }

    public function getData(){
        echo "Nama gw : " . $this->nama . "Nim gw : " . $this->nim;
    }
}

$mhs = new Mahasiswa;
$mhs->nim = '230202007';
$mhs->setNama('abcd');
$mhs->getData();
echo "<pre>";
print_r($mhs);