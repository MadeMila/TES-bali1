<?php
include "header.php";
include "xclass.php";

$c_masterdokter = new masterdokter();
$kode_dokter = $_GET['id'];

$data = $c_masterdokter->edit_masterdokter($kode_dokter);

?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Master Dokter</h1>
    </div>

    <form action="proses_edit_masterdokter.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Dokter</label>
            <input type="hidden" class="form-control" name="kode_dokter" value="<?php echo $data['kode_dokter'] ?> ">
            <input type="text" class="form-control" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?> " placeholder="Input Nama Dokter...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Spesialis</label>
            <select name="spesialis" class="form-control">
                <?php foreach ($c_masterdokter->get_spesialis() as $spe) {
                    if ($spe['nama_spesialis'] == $data['spesialis']) {
                ?>
                        <option selected><?php echo $spe['nama_spesialis'] ?></option>
                    <?php } else { ?>
                        <option><?php echo $spe['nama_spesialis'] ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <?php foreach ($c_masterdokter->get_jeniskelamin() as $jk) {
                    if ($jk['jenis_kelamin'] == $data['jeniskelamin']) {
                ?>
                        <option selected><?php echo $jk['nama_kelamin'] ?></option>
                    <?php } else { ?>
                        <option><?php echo $jk['nama_kelamin'] ?></option>
                <?php }
                } ?>
            </select> 
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat Praktek</label>
            <input type="address" class="form-control" name="alamat_praktek" value="<?php echo $data['alamat_praktek'] ?>" placeholder="Input Alamat Praktek...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telp</label>
            <input type="text" class="form-control" name="no_telp" value="<?php echo $data['no_telp'] ?>" placeholder="Input No Telp...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="datetime-localtime" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>"  placeholder="Input Tanggal Lahir...">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>