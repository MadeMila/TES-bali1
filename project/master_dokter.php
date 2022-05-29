<?php
include "header.php";
include "xclass.php";

$c_masterdokter = new masterdokter();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Master Dokter</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_masterdokter.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-danger">Input Data Master Dokter</button></a>  
            <a href="cetak-laporan/laporan-cetakmasterdokter.php"><button type="button" class="p-2 mb-2 btn btn-danger">Print</button></a>
            
            <br>
            <br>


            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat Praktek</th>
                    <th>No Telp</th>
                    <th>Tanggal Lahir</th>
                    <th>Act</th>
                </tr>
            </thead>


            <tbody>
                <?php
                $no = 1;
                foreach ($c_masterdokter->tampil_data_masterdokter() as $data) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['kode_dokter'] ?></td>
                        <td><?php echo $data['nama_dokter'] ?></td>
                        <td><?php echo $data['spesialis'] ?></td>
                        <td><?php echo $data['jenis_kelamin'] ?></td>
                        <td><?php echo $data['alamat_praktek'] ?></td>
                        <td><?php echo $data['no_telp'] ?></td>
                        <td><?php echo $data['tanggal_lahir'] ?></td>
                        <td style="width: 12%;">
                            <a href="edit_masterdokter.php?id=<?php echo $data['kode_dokter'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                            <a href="delete_masterdokter.php?id=<?php echo $data['kode_dokter'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</main>

<?php include "footer.php" ?>