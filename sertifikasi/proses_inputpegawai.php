<?php
include "xclass.php";
$c_pegawai = new pegawai();

$data = array(
    'id_pegawai' => $_POST['id_pegawai'],
    'nama' => $_POST['nama'],
    'umur' => $_POST['umur'],
    'notlp' => $_POST['notlp'],
    'email' => $_POST['email'],
    'alamat' => $_POST['alamat']
);

$insert = $c_pegawai->insert_data_pegawai($data);
if($insert)
{
    echo "<script>alert('Data berhasil di simpan..!'); window.location='pegawai.php'</script>";
}
