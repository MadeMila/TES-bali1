<?php 
include "xclass.php";
$c_produk = new produk();


$data = array(
    'id_produk' => $_POST['id_produk'],
    'deskripsi' => $_POST['deskripsi'],
    'foto' => $_POST['foto'],
    'tgl' => $_POST['tgl'],
    'harga' => $_POST['harga']
);

    $insert = $c_produk->insert_data_produk($data);
    if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='produk.php'</script>";
}

