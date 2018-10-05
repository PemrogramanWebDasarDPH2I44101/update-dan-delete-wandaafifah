<?php
require_once("db.php");
$nim         = $_GET['nim'];
$siswa  	= mysqli_query($connection, "select * from siswa where nim='$nim'");
$row        = mysqli_fetch_array($siswa);

function active_radio_button($value,$input){
    
    $result =  $value==$input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">

	<table align="center">
		<form  action="update.php" colspan="3" method="POST" >
			<tr >
				<td align="center" colspan="3">Form edit</td><br>
			</tr>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nim']; ?>" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama']; ?>" name="nama"></td>
			</tr>
			<tr>
				<td>Tgl Lahir</td>
				<td>:</td>
				<td><input type="date" value="<?php echo $row['tgl_lahir']?>" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="simpan" value="update">
				</td>
			</tr>
		</form>
	</table>
</body>
</html>