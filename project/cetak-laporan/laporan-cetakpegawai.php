<?php  
session_start();
$server="localhost";
$user="root";
$pass="";
$db="ba193_db";

//Koneksi dan Menentukan Database Di Server
$konek=mysqli_connect($server,$user,$pass) or die ("KONEKSI GAGAL");
$konek_database=mysqli_select_db($konek,$db) or die ("DATABASE TIDAK BISA DIBUKA");
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

	<script type="text/javascript">
	window.print() 
	</script>
    
	<style type="text/css">
	#print {
		margin:auto;
		text-align:center;
		font-family:"Calibri", Courier, monospace;
		width:1200px;
		font-size:14px;
	}
	#print .title {
		margin:20px;
		text-align:right;
		font-family:"Calibri", Courier, monospace;
		font-size:12px;
	}
	#print span {
		text-align:center;
		font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;	
		font-size:18px;
	}
	#print table {
		border-collapse:collapse;
		width:100%;
		margin:10px;
	}
	#print .table1 {
		border-collapse:collapse;
		width:90%;
		text-align:center;
		margin:10px;
	}
	#print table hr {
		border:3px double #000;	
	}
	#print .ttd {
		float:right;
		width:250px;
		background-position:center;
		background-size:contain;
	}
	#print table th {
		color:#000;
		font-family:Verdana, Geneva, sans-serif;
		font-size:12px;
	}
	#logo{
		width:111px;
		height:90px;
		padding-top:10px;	
		margin-left:10px;
	}

	h2,h3{
		margin: 0px 0px 0px 0px;
	}
	</style>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #b3d9ff;
  color: white;
}
</style>
<title>Laporan Cetak</title>
<div id="print">
	<table class='table1'>
		<tr>
			<td><img src='anime.png' height="100" width="100"></td>
						<td>
			<h2>Scrip Print Data dan Save PDF Pada PHP dan MySQL </h2>
			<h2>Pegawai</h2>
			</td>
		</tr>
	</table>
	
<table class='table'>	
	<td><hr /></td>
</table>
<td><h3>LAPORAN DATA PEGAWAI</h3></td>
	

<table id="customers" class='table' width="90%">
	<tr>
		<th width="30">No</th>
		<th>ID Pegawai</th>
		<th>Nama Pegawai</th>
		<th>Alamat Pegawai</th>
		<th>No. HP</th>
	</tr>

	<?php 
		$data = mysqli_query($konek,"SELECT * FROM pegawai");
		$q=0;
		while ($row = mysqli_fetch_array($data)) {
		$q++;
	?> 

	<tr>
		<td><?php echo $q; ?></td>
		<td>&nbsp;&nbsp;<?php echo $row['id_pegawai']; ?></td>
		<td>&nbsp;&nbsp;<?php echo $row['nama'] ?></td>
		<td>&nbsp;&nbsp;<?php echo $row['alamat'] ?></td>
		<td>&nbsp;&nbsp;<?php echo $row['notlp'] ?></td>
	</tr>
	<?php } ?>
</table>

</tr>
</div>

<div id="print">
<table width="450" class="ttd">
	<tr>
		<td width="100px" style="padding:20px 20px 20px 20px;">
		<strong>Mademila,</strong>
		<br><br><br><br>
		<strong><u>TTD</u><br></strong><small></small></td>
	</tr>
</table>
</div>
