<?php
include "xclass.php";

$id_produk= $_GET['id'];

$c_produk = new produk();

$delete = $c_produk->delete_produk($id_produk);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='produk.php'</script>";
}
