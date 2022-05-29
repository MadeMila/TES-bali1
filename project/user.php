<?php
include "header.php";
include "xclass.php";

$c_user = new user();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin</h1>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="input_user.php" style="padding-right: 3px;"><button type="button" class="p-2 mb-2 btn btn-danger">Input Data Admin</button></a>  
            <a href="cetak-laporan/laporan-cetakuser.php"><button type="button" class="p-2 mb-2 btn btn-danger">Print</button></a>
            <br>
            <br>

            <thead>
                <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Password</th>
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
                    <td><?php echo $data['nama_user'] ?></td>
                    <td><?php echo $data['kota'] ?></td>
                    <td><?php echo "<img src='img/$data[foto]' width='100px' height='100px'>"; ?></td>
                    <td style="width: 12%;">
                        <a href="edit_user.php?id=<?php echo $data['id_user'] ?>"><button class="btn btn-outline-secondary btn-sm">Edit</button></a>
                        <a href="delete_user.php?id=<?php echo $data['id_user'] ?>"><button class="btn btn-outline-danger btn-sm">Delete</button></a>
                    </td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

</main>
<?php include "footer.php" ?>