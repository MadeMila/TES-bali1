<?php
include "koneksi.php";

class login extends database
{
    function __construct()
    {
        parent::__construct();
    }

    function login_proses($username, $pass_word)
    {
        $qry = "select * from user where username = '$username' and pass_word = '$pass_word'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_array($exec);

        return $data;
    }
}

$username = $_POST['username'];
$pass_word = $_POST['pass_word'];

$login = new login();

$data = $login->login_proses($username, $pass_word);

if (empty($data)) {
    echo "<script>alert('Username dan password anda tidak ditemukan!')
    window.location='login.php'</script>";
} else {
    session_start();
    $_SESSION['nama_user'] = $data['nama_user'];

    echo "<script>alert('Login berhasil')
    window.location='home.php'</script>";
}
