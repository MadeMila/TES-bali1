<?php
include "xclass.php";

$id_bayar= $_GET['id'];

$c_pembayaran = new pembayaran();

$delete = $c_pembayaran->delete_pembayaran($id_bayar);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='pembayaran.php'</script>";
}
