<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "test";


//Konesi ke database;
$conn = new mysqli($host, $user, $pass, $name);// or die("Koneksi ke Server gagalz");
//$konek_db = mysql_select_db($name) or die("Tidak ada database yang di pilih");

/*if($conn){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
/*
if($konek_db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
} */


 ?>
