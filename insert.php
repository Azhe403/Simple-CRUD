<?php
// Mulai proses tambah data
//Cek dahulu, jika tombol di klik
if(isset($_POST['tambah'])!=""){
  //Include atau memasukkan file koneks ke database
  include('koneksi.php');

  //Jika tombol tambah benar di klik maka lanjut ke prosess nya
  $id       = $_POST['id']; // Membuat variable $nis dan datanya dari inputan nis
  $nama     = $_POST['nama']; //Membuat variable $nama dan datanya dari inputan nama
  $kelas    = $_POST['kelas'];
  $jurusan  = $_POST['jurusan'];

  // Melalukan Query dengan perintah INSERT INTO untuk memasukkan data ke Database;
  $insert = $conn->query("INSERT INTO siswa(id,nama,kelas,jurusan) VALUES('$id', '$nama', '$kelas', '$jurusan')");

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
  $conn->close();
    //mysqli_query($conn, $sql);
   //window.history.back() </script>';
}

?>
