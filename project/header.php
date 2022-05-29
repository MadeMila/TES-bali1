<!doctype html>
<html lang="en">
<?php  
    session_start();
    $server="localhost";
    $user="root";
    $pass="";
    $db="ba193_db";

    //Koneksi dan Menentukan Database Di Server
    $konek=mysqli_connect($server,$user,$pass) or die ("KONEKSI GAGAL");
    $konek_database=mysqli_select_db($konek,$db) or die ("DATABASE TIDAK BISA DIBUKA");
    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>SERTIFIKASI</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="assets/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-danger flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 bg-danger" href="#">Ratatouille-cafe</a>       
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <?php
        session_start();

        $nama_user = $_SESSION['nama_user'];

        if(empty($nama_user)){
            echo "<script>alert('akses ditolak, silahkan login terlebih dahulu')
            window.location='login.php'</script>";
        }

        ?>
        <input class="form-control form-control-danger w-100" type="text" placeholder="Search" aria-label="Search">
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
            <a class="nav-link"> Welcome,<?php echo $nama_user?> </a>
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                <br>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="home.php">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user.php">
                                <span data-feather="user"></span>
                                Admin
                            </a>
                        </li>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pegawai.php">
                                <span data-feather="users"></span>
                                Pegawai
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk.php">
                                <span data-feather="archive"></span>
                                Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pelanggan.php">
                                <span data-feather="bell"></span>
                                Pelanggan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pembayaran.php">
                                <span data-feather="dollar-sign"></span>
                                Pembayaran
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="master_dokter.php">
                                <span data-feather="activity"></span>
                                Master Dokter
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>   