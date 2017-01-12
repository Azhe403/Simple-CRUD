<?php
// Mulai proses tambah data
//Cek dahulu, jika tombol di klik
if(isset($_post['tambah'])!=""){
  //Include atau memasukkan file koneks ke database
  include('koneksi.php');

  //Jika tombol tambah benar di klik maka lanjut ke prosess nya
  $id       = $_post['id']; // Membuat variable $nis dan datanya dari inputan nis
  $nama     = $_post['nama']; //Membuat variable $nama dan datanya dari inputan nama
  $kelas    = $_post['kelas'];
  $jurusan  = $_post['jurusan'];

  // Melalukan Query dengan perintah INSERT INTO untuk memasukkan data ke Database;
  $insert = mysqli_query($conn,"INSERT INTO siswa(id,nama,kelas,jurusan) VALUES('$id', '$nama', '$kelas', '$jurusan')");

  if($insert)
  {
    $msg="New recort Succesfully";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    header('Location:index.php');
  }
  else
  {
    $msg="Gagal coegs :3";
    echo "<script type='text/javascript'>alert('$msg');</script>";
    header('Location:index.php');
  }
  $mysqli->close();
    //mysqli_query($conn, $sql);
   //window.history.back() </script>';
}

?>
