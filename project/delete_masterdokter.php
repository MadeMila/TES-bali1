<?php
include "xclass.php";

$kode_dokter= $_GET['id'];

$c_masterdokter = new masterdokter();

$delete = $c_masterdokter->delete_masterdokter($kode_dokter);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='master_dokter.php'</script>";
}
