<?php
include "header.php";
include "xclass.php";

$c_user = new user();
$id_user = $_GET['id'];

$data = $c_user->edit_user($id_user);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit User</h1>
    </div>

    <form action="proses_edituser.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="hidden" class="form-control" name="id_user" value="<?php echo $data['id_user'] ?>">
            <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" name="pass_word" value="<?php echo $data['pass_word'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nama User</label>
            <input type="text" class="form-control" name="nama_user" value="<?php echo $data['nama_user'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kota</label>
            <select name="kota" class="form-control">
                <?php foreach ($c_user->get_kota() as $kt) {
                    if ($kt['nama_kota'] == $data['kota']) {
                ?>
                        <option selected><?php echo $kt['nama_kota'] ?></option>
                    <?php } else { ?>
                        <option><?php echo $kt['nama_kota'] ?></option>
                <?php }
                } ?>
            </select>
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" class="form-control" name="foto" value="<?php echo $data['foto'] ?>">
            <p style="color: grey">Ekstensi yang diperbolehkan .png/.jpg/.jpeg/.gif</p>
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>