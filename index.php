<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan Crud by Azhe403</title>
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

      //Query ke database dengan Select;
      $query = mysql_query("SELECT * FROM test") or die(mysql_error());

      if(mysql_num_rows($query) == 0){
        //Jika data kosong
        echo '<tr>
                <td colspan="6">Tidak ada data!!</td>
        </tr>';
      }else{
        //Jika data tidak kosong, maka akan melalkukan perulangan While
        $no = 1;
        while($data = mysql_fetch_assoc($query)){
            echo '<tr>';
                echo '<td>'.$no.'</td>';
                echo '<td>'.$data['nama'].'</td>';
                echo '<td>'.$data['kelas'].'</td>';
                echo '<td>'.$data['jurusan'].'</td>';
            echo '</tr>';
            $no++;

        }
      }

       ?>
    </table>

  </body>
</html>
