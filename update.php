<?php
require_once("db.php");
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$tgl_lahir        = $_POST['tgl_lahir'];

$sql="UPDATE siswa SET nama='$nama',tgl_lahir='$tgl_lahir' where nim='$nim'";
mysqli_query($connection, $sql);
header("location:conn2.php");
?>

