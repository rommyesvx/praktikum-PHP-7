<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_kantor";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
} else {
    echo "Connection Success<br>";
}

$sql = "CREATE TABLE jabatan (
    id_jabatan INT(6) UNSIGNED PRIMARY KEY,
    id_karyawan INT(6) UNSIGNED, FOREIGN KEY (id_karyawan) REFERENCES karyawan(id_karyawan),
    jabatan VARCHAR (30) NOT NULL )";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
