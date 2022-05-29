<?php
include "xclass.php";

$id_pegawai = $_GET['id'];

$c_pegawai = new pegawai();

$delete = $c_pegawai->delete_pegawai($id_pegawai);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='pegawai.php'</script>";
}
