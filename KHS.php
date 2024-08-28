<?php

class matakuliah
{
    public $kodemk;
    public $namamatkul;
    public $sks;

    public function tampilmatakuliah($namamatkul)
    {
        $this->namamatkul = $namamatkul;
        return "Nama Matakuliah : $this->namamatkul";
    }
}

$matkul = new matakuliah();
echo $matkul->tampilmatakuliah("Pemrograman Web 2");
?>