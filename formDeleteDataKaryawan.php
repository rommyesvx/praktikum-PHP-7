<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="hapusDataKaryawan.php" method="GET">
	<h2>Delete Data</h2>
	<p>
		<label>ID Karyawan</label>
		<input type="text" name="id_kry">
	</p>
	<input type="submit" name="submit" value="Delete">
</form>
<button onclick="window.location.href='formInputDataKaryawan.php';">
      Kembali
    </button>
</body>
</html>