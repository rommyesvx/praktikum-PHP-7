<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data_kantor";

$db = mysqli_connect($server, $user, $password, $nama_database);

if(isset($_GET['id_kry'])){
	$id = $_GET['id_kry'];

	$sql = "DELETE FROM karyawan WHERE id_karyawan=$id";
    $query = mysqli_query($db, $sql);

    if($query){
    	header('Location: formInputDataKaryawan.php');
    }
}
 ?>