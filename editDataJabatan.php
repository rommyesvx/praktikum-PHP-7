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

	$sql = "UPDATE jabatan SET id_karyawan= '$id_kry', jabatan='$jabatan' WHERE id_jabatan = '$id_jb'";
	$query = mysqli_query($db, $sql);
	if ($query) {
		header('Location: formEditDataJabatan.php');
	}
}
 ?>