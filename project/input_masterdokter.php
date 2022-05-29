<?php
include "header.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input Master Dokter</h1>
    </div>

    <form action="proses_input_masterdokter.php" method="POST">
    <div class="form-group">
            <label for="exampleInputEmail1">Kode Dokter</label>
            <input type="number" class="form-control" name="kode_dokter" placeholder="Input Kode Dokter...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Dokter</label>
            <input type="text" class="form-control" name="nama_dokter" placeholder="Input Nama Dokter...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Spesialis</label>
            <select name="spesialis" class="form-control">
                <option>-Pilih Spesialis-</option>
                <option>Umum</option>
                <option>Anak</option>
                <option>Kandungan</option>
                <option>Dalam</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option>-Pilih Jenis Kelamin-</option>
                <option>Pria</option>
                <option>Wanita</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat Praktek</label>
            <input type="address" class="form-control" name="alamat_praktek" placeholder="Input Alamat Praktek...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">No Telp</label>
            <input type="text" class="form-control" name="no_telp" placeholder="Input No Telp...">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Tanggal Lahir</label>
            <input type="datetime-local" class="form-control" name="tanggal_lahir" placeholder="Input Tanggal Lahir...">
        </div>
        </br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>

</main>
<?php include "footer.php" ?>
<br>