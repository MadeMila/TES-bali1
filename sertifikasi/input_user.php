<?php
include "header.php";
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Input User</h1>

            <form action="proses_inputuser.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Input Username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" name="pass_word" placeholder="Input Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Input Alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama User</label>
                    <input type="text" class="form-control" name="nama_user" placeholder="Input Nama User">
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
                    <input type="file" class="form-control" name="foto">
                    <p style="color: grey">Ekstensi yang diperbolehkan .png/.jpg/.jpeg/.gif</p>
                </div>
                </br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>   
</div>
<?php include "footer.php" ?>