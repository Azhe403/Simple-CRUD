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

            <?php
            //Include file koneksi
            include("koneksi.php");
            echo "<table border=1 cellspacing=5 cellpadding=5>";
              echo "<tr>";
                echo "<th width=30>No</th>";
                echo "<th width=300>Nama Lengkav</th>";
                echo "<th width=60>Kelas</th>";
                echo "<th width=200>Jurusan</th>";
              echo "</tr>";

            $q = $conn->query("SELECT * FROM siswa");
            foreach ($q as $data){
              # code...
              echo "<tr>";
                  echo "<td>".$data['id']."</td>";
                  echo "<td>".$data['nama']."</td>";
                  echo "<td>".$data['kelas']."</td>";
                  echo "<td>".$data['jurusan']."</td>";
                  echo "<td><a href='delete.php?id=".$data['id']."'>Hapus</a></td>";
              echo "</tr>";
            }
            echo "</table>";
            $q->close();
            ?>
        </td>
      </tr>
      <tr>
        <td><p>&copy 2017 Azhe403, Inc. Allright Reserved.</p></td>
      </tr>
    </table>
  </body>
</html>
