<?php
include "xclass.php";
$c_produk = new produk();

$data = array(
    'deskripsi' => $_POST['deskripsi'],
    'foto' => $_POST['foto'],
    'tgl' => $_POST['tgl'],
    'harga' => $_POST['harga'],
    'id_produk' => $_POST['id_produk']
);

$update = $c_produk->update_produk($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='produk.php'</script>";
}

