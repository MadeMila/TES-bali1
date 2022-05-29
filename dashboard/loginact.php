<?php

include "koneksi.php"; 

    class login extends database{
        function __construct()
        {
            parent:: __construct();
        }

        function login_proses($username,$password)
        {
            $qry  = "select * from user where username ='$username' and password ='$password'";
            $exec = mysqli_query($this->con,$qry);
            $data = mysqli_fetch_array($exec);

            return $data;
        }
    }

    $username =$_POST['username'];
    $password =$_POST['password'];
    
    $login = new login();
    
    $data = $login->login_proses($username,$password);


    if(empty($data)){
        echo "<script> alert('Username dan password tidak ditemukan')
        window.location='login.php'</script>";
    }else{
        session_start();
        $_SESSION['nama_user'] = $data['nama_user'];

        echo "<script> alert('Login Berhasil')
        window.location='home.php'</script>";
    }
?>