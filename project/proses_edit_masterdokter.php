<?php
include "xclass.php";
$c_masterdokter = new masterdokter();

$data = array(
    'nama_dokter' => $_POST['nama_dokter'],
    'spesialis' => $_POST['spesialis'],
    'jenis_kelamin' => $_POST['jenis_kelamin'],
    'alamat_praktek' => $_POST['alamat_praktek'],
    'no_telp' => $_POST['no_telp'],
    'tanggal_lahir' => $_POST['tanggal_lahir'],
    'kode_dokter' => $_POST['kode_dokter']
);

$update = $c_masterdokter->update_masterdokter($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='master_dokter.php'</script>";
}

