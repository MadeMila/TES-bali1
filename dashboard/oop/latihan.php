<?php

class mahasiswa{
    protected $nama = "Mila";
    var $alamat = "Tabanan";

    function tampil_mahasiswa(){
        return "Nama Mahasiswa : ".$this->nama;
    }

    function tampil_alamat(){
        return "Alamat Mahasiswa : ".$this->alamat;
    }
}

class mhs_public{
    public function tampil_nama(){
        $this->nm = new mahasiswa();
        return "Nama Mahasiswa public :". $this->nm->nama;
    }
}

class mhs_pr extends mahasiswa{
    public function tampil_alamat(){
        $this->nm = new mahasiswa();
        return "Alamat Mahasiswa :". $this->alamat;
    }
}

$mahasiswa = new mahasiswa();
$mhs_public = new mhs_public();
$mhs_pr = new mhs_pr();

// echo $mhs_public->tampil_nama();
// echo $mahasiswa->tampil_mahasiswa();
// echo "<br>";
// echo $mahasiswa->tampil_alamat();
echo $mhs_pr->tampil_alamat();