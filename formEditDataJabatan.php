<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="editDataJabatan.php" method="GET">
		<h2>Edit Data Jabatan</h2>
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
		<p>
			<input type="submit" name="submit" value="Simpan">
		</p>
	</form>
	<button onclick="window.location.href='formInputDataJabatan.php';">
      Kembali
    </button>
</body>
</html>