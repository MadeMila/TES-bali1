<?php
include "header.php";
include "xclass.php";

$c_pembayaran = new pembayaran();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pembayaran</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_pembayaran.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-danger">Input Data Pembayaran</button></a>  
            <a href="cetak-laporan/laporan_cetakpembayaran.php"><button type="button" class="p-2 mb-2 btn btn-danger">Print</button></a>
            <br>
            <br>

            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pembayaran</th>
                    <th>Tgl Bayar</th>
                    <th>Total</th>
                    <th>Metode Bayar</th>
                    <th>Id Pelanggan</th>
                    <th>Act</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($c_pembayaran->tampil_data_pembayaran() as $data) {
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['id_bayar'] ?></td>
                    <td><?php echo $data['tanggal_bayar'] ?></td>
                    <td><?php echo $data['total'] ?></td>
                    <td><?php echo $data['metode_bayar'] ?></td>
                    <td><?php echo $data['id_pelanggan'] ?></td>
                    <td style="width: 12%;">
                        <a href="edit_pembayaran.php?id=<?php echo $data['id_bayar'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                        <a href="delete_pembayaran.php?id=<?php echo $data['id_bayar'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

</main>
<?php include "footer.php" ?>