<?php
include "header.php";
include "xclass.php";

$c_pegawai = new pegawai();
$id_pegawai = $_GET['id'];

$data = $c_pegawai->edit_pegawai($id_pegawai);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pegawai</h1>
    </div>

    <form action="proses_editpegawai.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="hidden" class="form-control" name="id_pegawai" value="<?php echo $data['id_pegawai'] ?>">
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telepon</label>
            <input type="text" class="form-control" name="notlp" value="<?php echo $data['notlp'] ?>">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>