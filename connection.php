<?php

require_once("db.php");

$nim = $_POST['nim'];
$nama	= $_POST['nama'];
$tgl_lahir= $_POST['tgl_lahir'];

$sql = "INSERT INTO siswa (nim, nama, tgl_lahir)
		VALUES('$nim', '$nama', '$tgl_lahir')";

if(mysqli_query($connection, $sql)){
	header("Location:conn2.php");
}else{
	echo "Error: ".$sql. "<br>".mysqli_error($connection);
}

mysqli_close($connection);

?>