<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Pembayaran</h1>
    </div>

    <form action="proses_inputpembayaran.php" method="POST">
    <div class="form-group">
            <label for="exampleInputEmail1">Id Pembayaran</label>
            <input type="number" class="form-control" name="id_bayar" placeholder="Input Id Pembayaran...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Bayar</label>
            <input type="date" class="form-control" name="tanggal_bayar" placeholder="Input Tanggal Bayar...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Total Bayar</label>
            <input type="number" class="form-control" name="total" placeholder="Input Total Bayar...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Metode Pembayaran</label>
            <select name="metode_bayar" class="form-control">
                <option>-Pilih Metode-</option>
                <option>Cash</option>
                <option>Kredit</option>
                <option>Transfer</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Id Pelanggan</label>
            <input type="text" class="form-control" name="id_pelanggan" placeholder="Input ID Pelanggan...">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>
<br>