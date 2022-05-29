<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input User</h1>
    </div>

    <form action="proses_inputuser.php" method="POST">
    <div class="form-group">
            <label for="exampleInputEmail1">Id User</label>
            <input type="number" class="form-control" name="id_user" placeholder="Input Id User...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Input Username...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass_word" placeholder="Input Password...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nama User</label>
            <input type="text" class="form-control" name="nama_user" placeholder="Input Nama User...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Kota</label>
            <select name="kota" class="form-control">
                <option>-Pilih Kota-</option>
                <option>Jakarta</option>
                <option>Surabaya</option>
                <option>Semarang</option>
                <option>Bandung</option>
                <option>Denpasar</option>
                <option>Medan</option>
                <option>Balikpapan</option>
                <option>Makassar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Foto</label>
            <input type="file" class="form-control" name="foto" placeholder="Input Foto...">
            <p style="color: grey">Ekstensi yang diperbolehkan .png/.jpg/.jpeg/.gif</p>
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>
<br>