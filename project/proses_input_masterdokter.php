<?php 
include "xclass.php";
$c_masterdokter = new masterdokter();


$data = array(
    'kode_dokter' => $_POST['kode_dokter'],
    'nama_dokter' => $_POST['nama_dokter'],
    'spesialis' => $_POST['spesialis'],
    'jenis_kelamin' => $_POST['jenis_kelamin'],
    'alamat_praktek' => $_POST['alamat_praktek'],
    'no_telp' => $_POST['no_telp'],
    'tanggal_lahir' => $_POST['tanggal_lahir']
);

    $insert = $c_masterdokter->insert_data_masterdokter($data);
    if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='master_dokter.php'</script>";
}

