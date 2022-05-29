<?php
include "header.php";
include "xclass.php";

$c_user = new user();
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">User</h1>
                    
                <table class="table table-striped table-sm">
                    <a href="input_user.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-info">Input Data User</button></a>  
                    <a href="cetak-laporan/laporan-cetakuser.php"><button type="button" class="p-2 mb-2 btn btn-secondary">Print</button></a>
                    <br>
                    <br>

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID User</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>Nama User</th>
                            <th>Kota</th>
                            <th>Foto</th>
                            <th>Act</th>
                        </tr>
                    </thead>


                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($c_user->tampil_data_user() as $data) {
                        ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['id_user'] ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['pass_word'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['nama_user'] ?></td>
                                <td><?php echo $data['kota'] ?></td>
                                <td><?php echo "<img src='img/$data[foto]' width='100px' height='100px'>"; ?></td>
                                <td style="width: 15%;">
                                    <a href="edit_user.php?id=<?php echo $data['id_user'] ?>"><button class="btn btn-outline-info btn-sm">Edit</button></a>
                                    <a href="delete_user.php?id=<?php echo $data['id_user'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>   
</div>
<?php include "footer.php" ?>






