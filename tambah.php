<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Simple CRUD by Azhe403</title>
    <h2>Simple CRUD</h2>

    <p><a href="index.php">Beranda</a>/<a href="tambah.php">Tambah Data</a></p>
    <h3>Tambah data</h3>
    <form class="" action="tambah-process.php" method="post">
      <table>
        <tr>
          <td>ID</td>
          <td><input type="text" name="id" required></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" size="30" required></td>
        </tr>
        <td>Kelas</td>
        <td>
          <select class="" name="">
            <option value="">Pilih kelas</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
          </select>
        </td>
      </table>
    </form>

  </head>
  <body>

  </body>
</html>
