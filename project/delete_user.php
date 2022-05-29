<?php
include "xclass.php";

$id_user= $_GET['id'];

$c_user = new user();

$delete = $c_user->delete_user($id_user);

if($delete){
    echo "<script>alert('Data berhasil di hapus..!'); window.location='user.php'</script>";
}
