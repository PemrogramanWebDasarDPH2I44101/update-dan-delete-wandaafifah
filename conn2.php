<?php
 
require_once("db.php");
?>


<html>
<table border="1" align="center">
<head >
	<th>Nim</th>
	<th>Nama</th>
	<th>Tgl Lahir</th>
	<th>Action</th>
</head>
<body>


<?php
 $sql = "SELECT * FROM siswa";
 $result = mysqli_query($connection, $sql);

 if(mysqli_num_rows($result) > 0){
 	while ( $row = mysqli_fetch_assoc($result)) {
 		# code...
 		$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['tgl_lahir']."</td>";
 		echo "<td>"."<a href='edit.php?nim=$nim'>Edit</a>       <a href='del.php?nim=$nim'>Delete</a>"."</td>";
 		echo "</tr>";
 	}
 } else {
 	echo "0 results";
 }
mysqli_close($connection);

?>

</body>
</table>
</html>