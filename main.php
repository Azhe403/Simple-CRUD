<!doctype html>
<html>
	<head>
	<meta charset="utf-8">
		<title>Test PHP</title>
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
	</head>
	<body>
		<h1> Test Form dengan PHP </h1>
		<table>
			<tr>
				<td><label for="name" > Nama </label> </td>
				<td>:</td>
				<td><input type="text" name="name" size="30" maxlength="30"> </td>
			</tr>
			<tr>
				<td><label for="ttl"> Tempat, Tanggal Lahir</label></td>
				<td>:</td>
				<td><input type="text" name="ttl" size="30" maxlength="30"> </td>				
			</tr>
			<tr>
				<td><label for="alamat">Alamat</label> </td>
				<td>:</td>
				<td><input type="text" name="alamat" size="30" maxlength="30"> </td>
			</tr>
			<tr>
				<td><label for="jurusan">Jurusan</label></td>
				<td>:</td>
				<td><select name="jurusan">
					<option value="Teknik Elektronika">Teknik Elektronika</option>
					<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
					<option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
					<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
					</select></td>
			</tr>
			<tr>
				<td><label for="jnskel">Jenis kelamin</label></td>
				<td>:</td>
				<td><input type="radio" name="jnskel" value="Laki-laki">Laki-laki
					<input type="radio" name="jnskel" value="Perempuan">Peremvuan
					
				</td>
			</tr>

		</table>
	</body>
</html>