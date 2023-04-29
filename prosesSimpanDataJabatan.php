<?php 
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_kantor";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(isset($_GET['submit'])){
	$id_jb = $_GET['id_jb'];
	$id_kry = $_GET['id_kry'];
	$jabatan = $_GET['jabatan'];

	$sql = "INSERT INTO jabatan (id_jabatan, id_karyawan, jabatan) VALUES ('$id_jb', '$id_kry', '$jabatan')";
	$query = mysqli_query($db, $sql);

	if ($query) {
		header('Location: formInputDataJabatan.php');
	}
}


 ?>