<?php
include "xclass.php";
$c_user = new user();

$data = array(
    'username' => $_POST['username'],
    'pass_word' => $_POST['pass_word'],
    'alamat' => $_POST['alamat'],
    'nama_user' => $_POST['nama_user'],
    'kota' => $_POST['kota'],
    'foto' => $_POST['foto'],
    'id_user' => $_POST['id_user']
);

$update = $c_user->update_user($data);
if($update)
{
    echo "<script>alert('Data berhasil di edit..!'); window.location='user.php'</script>";
}

