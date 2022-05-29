<?php
include "xclass.php";
$c_pelanggan = new pelanggan();

$data = array(
    'id_pelanggan' => $_POST['id_pelanggan'],
    'nama' => $_POST['nama'],
    'no_tlp' => $_POST['no_tlp'],
    'pesanan' => $_POST['pesanan']
);

$insert = $c_pelanggan->insert_data_pelanggan($data);
if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='pelanggan.php'</script>";
}
