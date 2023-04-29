<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="prosesSimpanDataJabatan.php" method="get">
		<h2>Input Data Jabatan</h2>
		<p>
			<label>ID Jabatan</label>
			<input type="text" name="id_jb">
		</p>
		<p>
			<label>ID Karyawan</label>
			<input type="text" name="id_kry">
		</p>
		<p>
			<label>Jabatan</label>
			<input type="text" name="jabatan">
		</p>
		<input type="submit" name="submit" value="Simpan"><br>
	</form>
	<button onclick="window.location.href='formDeleteDataJabatan.php'">Halaman hapus data jabatan</button><br><br>
	<button onclick="window.location.href='formEditDataJabatan.php'">Halaman edit data Jabatan</button> 
</body>
</html>