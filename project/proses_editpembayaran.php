<?php
include "xclass.php";
$c_pembayaran = new pembayaran();

$data = array(
    'tanggal_bayar' => $_POST['tanggal_bayar'],
    'total' => $_POST['total'],
    'metode_bayar' => $_POST['metode_bayar'],
    'id_pelanggan' => $_POST['id_pelanggan'],
    'id_bayar' => $_POST['id_bayar']
);

$update = $c_pembayaran->update_pembayaran($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='pembayaran.php'</script>";
}

