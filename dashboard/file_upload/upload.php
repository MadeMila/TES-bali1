<html>
    <head>
        <title>Input Data User</title>
    </head>
    <body>
        <h2>Input Data User</h2>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <label>Nama User</label><br>
            <input type="text" name="nama"><br>
            <label>Username</label><br>
            <input type="text" name="username"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <label>Upload Foto</label><br>
            <input type="file" name="foto"><br><br>
            <input type="submit" name="simpan">
        </form>
    </body>
</html>