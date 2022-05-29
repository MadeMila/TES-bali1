<?php
class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "sertifikasi";
    protected $con;

    //$con = mysqli_connect("locahost","root","","sertifikasi");
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->username, $this->password, $this->database);

        return $this->con;
    }
}