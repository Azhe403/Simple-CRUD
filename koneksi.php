<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "test";

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke Database gagalz");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang di pilih");

 ?>
