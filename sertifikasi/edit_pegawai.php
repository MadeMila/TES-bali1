<?php
include "header.php";
include "xclass.php";

$c_pegawai = new pegawai();
$id_pegawai = $_GET['id'];

$data = $c_pegawai->edit_pegawai($id_pegawai);

?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Pegawai</h1>
                <form action="proses_editpegawai.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $data['id_pegawai'] ?>">
                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Umur</label>
                        <input type="number" class="form-control" name="umur" value="<?php echo $data['umur'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">No Telepon</label>
                        <input type="text" class="form-control" name="notlp" value="<?php echo $data['notlp'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
                    </div>
                    </br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>   
</div>
<?php include "footer.php" ?>