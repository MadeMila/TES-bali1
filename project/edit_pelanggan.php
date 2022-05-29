<?php
include "header.php";
include "xclass.php";

$c_pelanggan = new pelanggan();
$id_pelanggan = $_GET['id'];

$data = $c_pelanggan->edit_pelanggan($id_pelanggan);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pelanggan</h1>
    </div>

    <form action="proses_editpelanggan.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Pelanggan</label>
            <input type="hidden" class="form-control" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>">
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telepon</label>
            <input type="number" class="form-control" name="no_tlp" value="<?php echo $data['no_tlp'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Pesanan</label>
            <input type="text" class="form-control" name="pesanan" value="<?php echo $data['pesanan'] ?>">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>