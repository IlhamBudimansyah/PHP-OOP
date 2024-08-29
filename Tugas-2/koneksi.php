<?php

class koneksi
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "reports";
    protected $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }
}