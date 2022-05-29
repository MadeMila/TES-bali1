<?php
include "header.php";
include "xclass.php";

$c_produk = new produk();
$id_produk = $_GET['id'];

$data = $c_produk->edit_produk($id_produk);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Produk</h1>
    </div>

    <form action="proses_editproduk.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Deskripsi</label>
            <input type="hidden" class="form-control" name="id_produk" value="<?php echo $data['id_produk'] ?>">
            <input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" class="form-control" name="foto" value="<?php echo $data['foto'] ?>">
            <p style="color: grey">Ekstensi yang diperbolehkan .png/.jpg/.jpeg/.gif</p>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Upload</label>
            <input type="date" class="form-control" name="tgl" value="<?php echo $data['tgl'] ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Harga</label>
            <input type="number" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>