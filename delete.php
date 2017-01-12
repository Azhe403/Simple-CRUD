<?php
  //Include koneksi;
  include("koneksi.php");

  if(isset($_GET['id'])!="")
  {
    $id = $_GET['id'];
    $hapus = $conn->query("DELETE FROM siswa WHERE id='$id'");
    if($hapus){
      header('Location:index.php');
    }else{
      echo mysqli_error();
    }
  }

  $mysqli->close();
 ?>
