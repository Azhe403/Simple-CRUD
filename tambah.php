<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple CRUD by Azhe403</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <h2>Simple CRUD</h2>
    <p><a href="index.php">Beranda</a>/<a href="tambah.php">Tambah Data</a></p>
    <h3>Tambah data</h3>
    <form action="tambah-proses.php" method="post">
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
    <p>&copy 2017 Azhe403, Inc. Allright Reserved.</p>
  </body>
</html>
