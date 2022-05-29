<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Pegawai</h1>
    </div>

    <form action="proses_inputpegawai.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">ID Pegawai</label>
            <input type="number" class="form-control" name="id_pegawai" placeholder="Input ID">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Input Nama">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Input Alamat">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telepon</label>
            <input type="number" class="form-control" name="notlp" placeholder="Input No Telepon">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>