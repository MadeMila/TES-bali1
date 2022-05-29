<?php
include "header.php";
include "xclass.php";

$c_pegawai = new pegawai();
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pegawai</h1>
                    
                <table class="table table-striped table-sm">
                    <a href="input_pegawai.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-info">Input Data Pegawai</button></a>  
                    <a href="cetak-laporan/laporan-cetakpegawai.php"><button type="button" class="p-2 mb-2 btn btn-secondary">Print</button></a>
                    <br>
                    <br>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>No Tlp</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Act</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($c_pegawai->tampil_data_pegawai() as $data) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['id_pegawai'] ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['umur'] ?></td>
                                <td><?php echo $data['notlp'] ?></td>
                                <td><?php echo $data['email'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td style="width: 15%;">
                                    <a href="edit_pegawai.php?id=<?php echo $data['id_pegawai'] ?>"><button class="btn btn-outline-info btn-sm">Edit</button></a>
                                    <a href="delete_pegawai.php?id=<?php echo $data['id_pegawai'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>   
</div>
<?php include "footer.php" ?>






