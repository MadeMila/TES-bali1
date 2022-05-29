<?php
include "xclass.php";
$c_pegawai = new pegawai();

$data = array(
    'nama' => $_POST['nama'],
    'umur' => $_POST['umur'],
    'notlp' => $_POST['notlp'],
    'email' => $_POST['email'],
    'alamat' => $_POST['alamat'],
    'id_pegawai' => $_POST['id_pegawai']
);

$update = $c_pegawai->update_pegawai($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='pegawai.php'</script>";
}
