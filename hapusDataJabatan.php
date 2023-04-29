<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_kantor";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(isset($_GET['id_jb'])){
	$id = $_GET['id_jb'];

	$sql = "DELETE FROM jabatan WHERE id_jabatan=$id";
    $query = mysqli_query($db, $sql);

    if($query){
    	header('Location: hapusDataJabatan.php');
    }
}
 ?>