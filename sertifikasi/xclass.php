<?php
include "koneksi.php";


//-----------------------PEGAWAI
class pegawai extends database{
    function __construct()
    {
        parent::__construct();
    }

    function tampil_data_pegawai()
    {
        $qry = "SELECT * FROM pegawai";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;
    }
    function insert_data_pegawai($data){
        $qry = "INSERT INTO pegawai (id_pegawai,nama,umur,notlp,email,alamat) 
                VALUES('".$data['id_pegawai']. "','".$data['nama']. "','" . $data['umur'] . "','" . $data['notlp'] . "','" . $data['email'] . "','" . $data['alamat'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;
    }
    function edit_pegawai($id)
    {
        $qry = "SELECT * from pegawai WHERE id_pegawai= '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_pegawai($data)
    {
        $qry = "UPDATE pegawai SET 
                nama = '".$data['nama']. "', 
                umur = '".$data['umur']. "', 
                notlp = '".$data['notlp']. "', 
                email = '".$data['email']. "', 
                alamat = '" . $data['alamat'] . "' where id_pegawai = '".$data['id_pegawai']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_pegawai($id)
    {
        $qry = "DELETE FROM pegawai WHERE id_pegawai = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
}


//-----------------------USER
class user extends database{
    function __construct()
    {
        parent::__construct();
    }

    function tampil_data_user()
    {
        $qry = "SELECT * FROM user";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;
    }
    function insert_data_user($data){
        $qry = "INSERT INTO user (id_user,username,pass_word,alamat,nama_user,kota,foto) 
                VALUES('".$data['id_user']. "','".$data['username']. "','" . $data['pass_word'] . "','" . $data['alamat'] . "','" . $data['nama_user'] . "','" . $data['kota'] . "','" . $data['foto'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;
    }
    function edit_user($id)
    {
        $qry = "SELECT * from user WHERE id_user= '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_user($data)
    {
        $qry = "UPDATE user SET 
                username = '".$data['username']. "', 
                pass_word = '" . $data['pass_word'] . "',
                alamat = '" . $data['alamat'] . "',
                nama_user = '" . $data['nama_user'] . "',
                kota = '" . $data['kota'] . "',
                foto = '" . $data['foto'] . "' where id_user = '".$data['id_user']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_user($id)
    {
        $qry = "DELETE FROM user WHERE id_user = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
    function get_kota()
    {
        $kota = array(
            ['id_kota' => 1, 'nama_kota' => 'Jakarta'],
            ['id_kota' => 2, 'nama_kota' => 'Surabaya'],
            ['id_kota' => 3, 'nama_kota' => 'Semarang'],
            ['id_kota' => 4, 'nama_kota' => 'Bandung'],
            ['id_kota' => 5, 'nama_kota' => 'Denpasar'],
            ['id_kota' => 6, 'nama_kota' => 'Medan'],
            ['id_kota' => 7, 'nama_kota' => 'Balikpapan'],
            ['id_kota' => 8, 'nama_kota' => 'Makassar']
        );

        return $kota;
    }
}
