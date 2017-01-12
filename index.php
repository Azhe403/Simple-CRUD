<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Latihan Crud by Azhe403</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <table border="1" align="center">
      <tr>
        <td><h2>Simple Crud</h2></td>
      </tr>
      <tr>
        <td><p><a href="index.php">Beranda</a>/<a href="tambah.php">Tambah Data</a></p></td>
      </tr>
      <tr>
        <td>
          <form action="insert.php" method="post" name="insert">
            <table cellpadding="3" cellspacing="0">
              <tr>
                <td>ID</td>
                <td><input type="text" name="id" placeholder="Masukkan ID" required></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama Anda" size="30" required></td>
              </tr>
              <tr>
                <td>Kelas</td>
                <td>
                  <select class="" name="kelas" required>
                    <option value="">Pilih kelas</option>
                    <option value="VII">VII</option>
                    <option value="VIII">VIII</option>
                    <option value="IX">IX</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Jurusan</td>
                <td>
                  <select class="" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                  </select>
                </td>
              </tr>
            </table>
              &nbsp;
              <input type="submit" name="tambah" value="Tambah">
          </form>
          <br />

          <table border="1" cellspacing="5" cellpadding="5">
            <tr>
              <th width="30">No</th>
              <th width="300">Nama Lengkav</th>
              <th width="60">Kelas</th>
              <th width="200">Jurusan</th>
            </tr>
            <?php
            //Include file koneksi
            include("koneksi.php");
            $sql = "SELECT * FROM siswa"; //Membaca Tabel Siswa

            //Query ke database dengan Select;
            $query = mysqli_query($conn, $sql);// or die(mysqli_error());

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

        </td>
      </tr>
      <tr>
        <td><p>&copy 2016 Azhe403, Inc. Allright Reserved.</p></td>
      </tr>
    </table>
  </body>
</html>
