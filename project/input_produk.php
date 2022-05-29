<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Produk</h1>
    </div>

    <form action="proses_inputproduk.php" method="POST">
    <div class="form-group">
            <label for="exampleInputEmail1">Id Produk</label>
            <input type="number" class="form-control" name="id_produk" placeholder="Input Id Produk...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Input Deskripsi...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" class="form-control" name="foto" placeholder="Input Foto...">
            <p style="color: grey">Ekstensi yang diperbolehkan .png/.jpg/.jpeg/.gif</p>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Upload</label>
            <input type="date" class="form-control" name="tgl" placeholder="Input Upload...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" class="form-control" name="harga" placeholder="Input Harga...">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>
<br>