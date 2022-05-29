<?php
include "header.php";
include "xclass.php";

$c_produk = new produk();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produk</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_produk.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-danger">Input Data Produk</button></a>  
            <a href="cetak-laporan/laporan_cetakproduk.php"><button type="button" class="p-2 mb-2 btn btn-danger">Print</button></a>
            <br>
            <br>

            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Produk</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Upload</th>
                    <th>Harga</th>
                    <th>Act</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($c_produk->tampil_data_produk() as $data) {
                ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $data['id_produk'] ?></td>
                    <td><?php echo $data['deskripsi'] ?></td>
                    <td><?php echo "<img src='img/$data[foto]' width='100px' height='100px'>"; ?></td>
                    <td><?php echo $data['tgl'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td style="width: 12%;">
                        <a href="edit_produk.php?id=<?php echo $data['id_produk'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                        <a href="delete_produk.php?id=<?php echo $data['id_produk'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

</main>
<?php include "footer.php" ?>