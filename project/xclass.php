<?php
include "koneksi.php";


//---------------------------------------------pegawai
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
        $qry = "INSERT INTO pegawai (id_pegawai,nama,alamat,notlp) 
                VALUES('".$data['id_pegawai']. "','".$data['nama']. "','" . $data['alamat'] . "','" . $data['notlp'] . "')";
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
                alamat = '" . $data['alamat'] . "',
                notlp = '" . $data['notlp'] . "' where id_pegawai = '".$data['id_pegawai']."' 
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

    function get_kota()
    {
        $kota = array(
            ['id_kota' => 1, 'nama_kota' => 'Denpasar'],
            ['id_kota' => 2, 'nama_kota' => 'Jakarta'],
            ['id_kota' => 3, 'nama_kota' => 'Surabaya'],
            ['id_kota' => 4, 'nama_kota'=> 'Semarang']
        );

        return $kota;
    }
}
    

//---------------------------------------------Admin:user
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
        $qry = "INSERT INTO user (id_user,username,pass_word,nama_user,kota,foto) 
                VALUES('".$data['id_user']. "','" . $data['username'] . "','" . $data['pass_word'] . "','" . $data['nama_user'] . "','" . $data['kota'] . "','" . $data['foto'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_user($id)
    {
        $qry = "SELECT * from user WHERE id_user = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_user($data)
    {
        $qry = "UPDATE user SET 
                username = '".$data['username']. "', 
                pass_word = '" . $data['pass_word'] . "',
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


//---------------------------------------------Tentang
class tentang extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_tentang()
    {
        $qry = "SELECT * FROM tentang";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;
    }

    function insert_data_tentang($data){
        $qry = "INSERT INTO tentang (id_tentang,judul,deskripsi,tanggal) 
                VALUES('".$data['id_tentang']. "','" . $data['judul'] . "','" . $data['deskripsi'] . "','" . $data['tanggal'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;
    }
    function delete_tentang($id)
    {
        $qry = "DELETE FROM tentang WHERE id_tentang = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
}


//---------------------------------------------Admin:produk
class produk extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_produk()
    {
        $qry = "SELECT * FROM produk";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;

    }
    function insert_data_produk($data){
        $qry = "INSERT INTO produk (id_produk,deskripsi,foto,tgl,harga) 
                VALUES('".$data['id_produk']. "','" . $data['deskripsi'] . "','" . $data['foto'] . "','" . $data['tgl'] . "','" . $data['harga'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_produk($id)
    {
        $qry = "SELECT * from produk WHERE id_produk = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_produk($data)
    {
        $qry = "UPDATE produk SET 
                deskripsi = '".$data['deskripsi']. "', 
                foto = '" . $data['foto'] . "',
                tgl = '" . $data['tgl'] . "',
                harga = '" . $data['harga'] . "' where id_produk = '".$data['id_produk']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_produk($id)
    {
        $qry = "DELETE FROM produk WHERE id_produk = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
}


//---------------------------------------------Admin:pelanggan
class pelanggan extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_pelanggan()
    {
        $qry = "SELECT * FROM pelanggan";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;

    }
    function insert_data_pelanggan($data){
        $qry = "INSERT INTO pelanggan (id_pelanggan,nama, no_tlp, pesanan) 
                VALUES('".$data['id_pelanggan']. "','" . $data['nama'] . "','" . $data['no_tlp'] . "','" . $data['pesanan'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_pelanggan($id)
    {
        $qry = "SELECT * from pelanggan WHERE id_pelanggan = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_pelanggan($data)
    {
        $qry = "UPDATE pelanggan SET 
                nama = '".$data['nama']. "', 
                no_tlp = '" . $data['no_tlp'] . "',
                pesanan = '" . $data['pesanan'] . "' where id_pelanggan = '".$data['id_pelanggan']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_pelanggan($id)
    {
        $qry = "DELETE FROM pelanggan WHERE id_pelanggan = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
}


//---------------------------------------------Admin:pembayaran
class pembayaran extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_pembayaran()
    {
        $qry = "SELECT * FROM pembayaran";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;

    }
    function insert_data_pembayaran($data){
        $qry = "INSERT INTO pembayaran (id_bayar,tanggal_bayar,total,metode_bayar,id_pelanggan) 
                VALUES('".$data['id_bayar']. "','" . $data['tanggal_bayar'] . "','" . $data['total'] . "','" . $data['metode_bayar'] . "','" . $data['id_pelanggan'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_pembayaran($id)
    {
        $qry = "SELECT * from pembayaran WHERE id_bayar = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_pembayaran($data)
    {
        $qry = "UPDATE pembayaran SET 
                tanggal_bayar = '".$data['tanggal_bayar']. "', 
                total = '" . $data['total'] . "',
                metode_bayar = '" . $data['metode_bayar'] . "',
                id_pelanggan = '" . $data['id_pelanggan'] . "' where id_bayar = '".$data['id_bayar']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_pembayaran($id)
    {
        $qry = "DELETE FROM pembayaran WHERE id_bayar = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
    function get_bayar()
    {
        $metodebayar = array(
            ['id_metode' => 1, 'nama_metode' => 'Cash'],
            ['id_metode' => 2, 'nama_metode' => 'Kredit'],
            ['id_metode' => 3, 'nama_metode' => 'Transper'],
        );

        return $metodebayar;
    }
}


//---------------------------------------------Admin:master dokter
class masterdokter extends database{
    function __construct()
    {
        parent::__construct();
    }
    function tampil_data_masterdokter()
    {
        $qry = "SELECT * FROM masterdokter";
        $exec = mysqli_query($this->con,$qry);
        while($x  = mysqli_fetch_array($exec)){
            $data[] = $x;
        }

        return $data;

    }
    function insert_data_masterdokter($data){
        $qry = "INSERT INTO masterdokter (kode_dokter,nama_dokter,spesialis,jenis_kelamin,alamat_praktek,no_telp,tanggal_lahir) 
                VALUES('".$data['kode_dokter']. "','" . $data['nama_dokter'] . "','" . $data['spesialis'] . "','" . $data['jenis_kelamin'] . "','" . $data['alamat_praktek'] . "','" . $data['no_telp'] . "','" . $data['tanggal_lahir'] . "')";
        $exec = mysqli_query($this->con,$qry);

        return $exec;

    }
    function edit_masterdokter($id)
    {
        $qry = "SELECT * from masterdokter WHERE kode_dokter = '$id'";
        $exec = mysqli_query($this->con, $qry);
        $data = mysqli_fetch_assoc($exec);
        return $data;
    }
    function update_masterdokter($data)
    {
        $qry = "UPDATE masterdokter SET 
                nama_dokter = '".$data['nama_dokter']. "', 
                spesialis = '" . $data['spesialis'] . "',
                jenis_kelamin = '" . $data['jenis_kelamin'] . "',
                alamat_praktek = '".$data['alamat_praktek']. "', 
                no_telp = '" . $data['no_telp'] . "',
                tanggal_lahir = '" . $data['tanggal_lahir'] . "' where kode_dokter = '".$data['kode_dokter']."' 
                ";
        $exec = mysqli_query($this->con, $qry);
        return $exec;
    }
    function delete_masterdokter($id)
    {
        $qry = "DELETE FROM masterdokter WHERE kode_dokter = '$id'";
        $exec = mysqli_query($this->con,$qry);
        return $exec;
    }
    function get_spesialis()
    {
        $spe = array(
            ['id_spesialis' => 1, 'nama_spesialis' => 'Umum'],
            ['id_spesialis' => 2, 'nama_spesialis' => 'Anak'],
            ['id_spesialis' => 3, 'nama_spesialis' => 'Kandungan'],
            ['id_spesialis' => 4, 'nama_spesialis' => 'Dalam'],
        );

        return $spe;
    }

    function get_jeniskelamin()
    {
        $jk = array(
            ['id_kelamin' => 1, 'nama_kelamin' => 'Pria'],
            ['id_kelamin' => 2, 'nama_kelamin' => 'Wanita'],
        );

        return $jk;
    }
}




