<?php

$target_dir = "foto/";
$nama_user = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$target_file = $target_dir.basename($_FILES['foto']['name']);
$filetype =  strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$filename = basename($_FILES['foto']['name']);
$uploadok = 1;

//untuk mengecek ketersediannya foto
if(file_exists($target_file)){
    echo "maaf,foto sudah tersedia";
    $uploadok = 0;
}

//untuk mengecek size foto
if($_FILES['foto']['size'] > 500000) {
    echo "maaf,foto terlalu besar";
    $uploadok = 0;
}

//untuk filter type foto
if($filetype !='jpg' && $filetype !='png' && $filetype !='jpeg'){
    echo "maaf, type file tidak diijinkan";
}

if($uploadok == 0){
    echo "File tidak dapat di proses";
}else{
    if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_file)){
        $con = mysqli_connect("localhost","root","","ba193_db");

        $qry ="INSERT into user VALUES ('','$username','$password','$nama_user','$filename')";
        $exec = mysqli_query($con,$qry);
        if($exec){
            echo "<script>alert('Upload foto berhasil di proses'); window.location='upload.php'</script>";
        }
    }else{
        echo "<script>alert('Gagal upload foto'); window.location='upload.php'</script>";
    }
}
?>