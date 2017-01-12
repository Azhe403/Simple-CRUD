<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan Crud by Azhe403</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <h2>Simple Crud</h2>
    <p><a href="index.php">Beranda</a>/<a href="tambah.php">Tambah Data</a></p>

    <h3>Data Siswa</h3>

    <table border="1" cellspacing="0" cellpadding="5">
      <tr>
        <th>No</th>
        <th>Nama Lengkav</th>
        <th>Kelas</th>
        <th>Jurusan</th>
      </tr>
      <?php
      //Include file koneksi
      include("koneksi.php");
      $sql = "SELECT * FROM siswa";

      //Query ke database dengan Select;
      $query = mysqli_query($koneksi, $sql);// or die(mysqli_error());

      if(mysqli_num_rows($query) == 0){
        //Jika data kosong
        echo 'Tidak ada data.';
      }else{
        //Jika data tidak kosong, maka akan melalkukan perulangan While
        $no = 1;
        while($data = mysqli_fetch_assoc($query)){
            echo '<tr>';
                echo '<td width="40">'.$data['id'].'</td>';
                echo '<td width="300">'.$data['nama'].'</td>';
                echo '<td width="50">'.$data['kelas'].'</td>';
                echo '<td width="150">'.$data['jurusan'].'</td>';
            echo '</tr>';
            $no++;

        }
      }
       ?>
    </table>
	<br>
    <p>&copy 2016 Azhe403, Inc. Allright Reserved.</p>

  </body>
</html>
