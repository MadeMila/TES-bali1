<?php
class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "ba193_db";
    protected $con;

    //$con = mysqli_connect("locahost","root","","ba193_db");
    public function __construct()
    {
        $this->con = new mysqli($this->host, $this->username, $this->password, $this->database);

        return $this->con;
    }
}