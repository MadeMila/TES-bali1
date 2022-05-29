<?php
include "header.php";
include "xclass.php";

$c_pelanggan = new pelanggan();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pelanggan</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_pelanggan.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-danger">Input Data Pelanggan</button></a>  
            <a href="cetak-laporan/laporan_cetakpelanggan.php"><button type="button" class="p-2 mb-2 btn btn-danger">Print</button></a>
            <br>
            <br>

            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama</th>
                    <th>No Telepon</th>
                    <th>Pesanan</th>
                    <th>Act</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($c_pelanggan->tampil_data_pelanggan() as $data) {
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['id_pelanggan'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['no_tlp'] ?></td>
                    <td><?php echo $data['pesanan'] ?></td>
                    <td style="width: 12%;">
                        <a href="edit_pelanggan.php?id=<?php echo $data['id_pelanggan'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                        <a href="delete_pelanggan.php?id=<?php echo $data['id_pelanggan'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

</main>
<?php include "footer.php" ?>