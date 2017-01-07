<?php
// Mulai proses tambah data
//Cek dahulu, jika tombol di klik
if(isset($_post['tambah'])){
  //Include atau memasukkan file koneks ke database
  include('koneksi.php');

  //Jika tombol tambah benar di klik maka lanjut ke prosess nya
  $id       = $_post['id']; // Membuat variable $nis dan datanya dari inputan nis
  $nama     = $_post['nama']; //Membuat variable $nama dan datanya dari inputan nama
  $kelas    = $_post['kelas'];
  $jurusan  = $_post['jurusan'];

  // Melalukan Query dengan perintah INSERT INTO untuk memasukkan data ke Database;
  $input = mysql_query("INSERT INTO test VALUES(null, '$id', '$nama', '$kelas', '$jurusan')") or die(mysql_error());


  //Jika query input Sukses
  if($input){
    echo 'Data berhasil di tambahkan!'; //Pesan jika proses tambah sukses
    echo '<a href="tambah.php">Kembali</a>'; //Membuat link untuk kembali ke halaman tambah
  }else{
    echo 'Gagalz menambahkan data!'; //Pesan jika proses tambah gagalz
    echo '<a href="tambah.php">Kembali</a>'; //Membuat link untu kembali ke halaman tambah;
  }
}else { //Jika tidak terdeteksi tombol tambah di klik;
  # code...
  //redirect kembali ke halaman tambah;
  echo '<script>window.history.back()</script>';

}
 ?>
