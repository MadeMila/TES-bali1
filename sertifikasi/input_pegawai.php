<?php
include "header.php";
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Input Pegawai</h1>

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
                    <label for="exampleInputPassword1">Umur</label>
                    <input type="text" class="form-control" name="umur" placeholder="Input Umur">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Telepon</label>
                    <input type="number" class="form-control" name="notlp" placeholder="Input No Telepon">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Input Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Input Alamat">
                </div>
                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>   
</div>
<?php include "footer.php" ?>