<?php 
include "xclass.php";
$c_pembayaran = new pembayaran();


$data = array(
    'id_bayar' => $_POST['id_bayar'],
    'tanggal_bayar' => $_POST['tanggal_bayar'],
    'total' => $_POST['total'],
    'metode_bayar' => $_POST['metode_bayar'],
    'id_pelanggan' => $_POST['id_pelanggan']
);

    $insert = $c_pembayaran->insert_data_pembayaran($data);
    if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='pembayaran.php'</script>";
}

