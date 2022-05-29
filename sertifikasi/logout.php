<?php

session_start();
unset($_SESSION['nama_user']);

echo "<script>alert('Anda telah LogOut, Terima kasih')
    window.location='login.php'</script>";