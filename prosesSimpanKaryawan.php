<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_kantor";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(isset($_GET['submit'])){
	$id = $_GET['id_kry'];
	$nama = $_GET['nama'];
	$alamat = $_GET['alamat'];

	$sql = "INSERT INTO karyawan (id_karyawan, nama_karyawan, alamat) VALUES ('$id', '$nama', '$alamat')";
	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: formInputDataKaryawan.php');
	}
}


 ?>