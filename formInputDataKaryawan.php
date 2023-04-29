<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input</title>
</head>
<body>
	<form action="prosesSimpanKaryawan.php" method="GET">
		<h2>Input Data Karyawan</h2>
		<p>
			<label>ID Karyawan</label>
			<input type="text" name="id_kry">
		</p>
		<p>
			<label>Nama</label>
			<input type="text" name="nama">
		</p>
		<p>
			<label>Alamat</label>
			<input type="text" name="alamat">
		</p>
		<p>
			<input type="submit" name="submit" value="Simpan">

		</p>
	</form>
	<button onclick="window.location.href='formDeleteDataKaryawan.php'">Halaman hapus data karyawan</button><br><br>
	<button onclick="window.location.href='formEditDataKaryawan.php'">Halaman edit data karyawan</button> 
</body>
</html>