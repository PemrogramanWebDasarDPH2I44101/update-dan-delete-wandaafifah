<?php
require_once("db.php");
$nim=$_GET['nim'];
$sql ="DELETE from siswa where nim =$nim ";
mysqli_query($connection, $sql);
header("Location:conn2.php");

?>