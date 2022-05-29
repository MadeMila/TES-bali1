<?php
include "xclass.php";
$c_pelanggan = new pelanggan();

$data = array(
    'nama' => $_POST['nama'],
    'no_tlp' => $_POST['no_tlp'],
    'pesanan' => $_POST['pesanan'],
    'id_pelanggan' => $_POST['id_pelanggan']
);

$update = $c_pelanggan->update_pelanggan($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='pelanggan.php'</script>";
}
