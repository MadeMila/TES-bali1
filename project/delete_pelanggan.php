<?php
include "xclass.php";

$id_pelanggan= $_GET['id'];

$c_pelanggan = new pelanggan();

$delete = $c_pelanggan->delete_pelanggan($id_pelanggan);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='pelanggan.php'</script>";
}
