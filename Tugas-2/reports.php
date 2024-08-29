<?php

include "koneksi.php";

class database extends koneksi
{
    public function tampilData()
    {
        $sql = "SELECT * FROM reports";
        $data = mysqli_query($this->conn, $sql);
        while($row = mysqli_fetch_array($data))
        {
            $hasil[] = $row;
        }
        return $hasil;
    }
}