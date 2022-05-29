<?php
include "header.php";
include "xclass.php";

$c_pembayaran = new pembayaran();
$id_bayar = $_GET['id'];

$data = $c_pembayaran->edit_pembayaran($id_bayar);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pembayaran</h1>
    </div>

    <form action="proses_editpembayaran.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Bayar</label>
            <input type="hidden" class="form-control" name="id_bayar" value="<?php echo $data['id_bayar'] ?>">
            <input type="date" class="form-control" name="tanggal_bayar" value="<?php echo $data['tanggal_bayar'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Total</label>
            <input type="number" class="form-control" name="total" value="<?php echo $data['total'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Metode Bayar</label>
            <select name="metode_bayar" class="form-control">
                <?php foreach ($c_pembayaran->get_bayar() as $kt) {
                    if ($kt['nama_metode'] == $data['bayar']) {
                ?>
                        <option selected><?php echo $kt['nama_metode'] ?></option>
                    <?php } else { ?>
                        <option><?php echo $kt['nama_metode'] ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">ID Pelanggan</label>
            <input type="text" class="form-control" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>