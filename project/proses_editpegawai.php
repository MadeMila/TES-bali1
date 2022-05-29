<?php
include "xclass.php";
$c_pegawai = new pegawai();

$data = array(
    'nama' => $_POST['nama'],
    'alamat' => $_POST['alamat'],
    'notlp' => $_POST['notlp'],
    'id_pegawai' => $_POST['id_pegawai']
);

$update = $c_pegawai->update_pegawai($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='pegawai.php'</script>";
}
