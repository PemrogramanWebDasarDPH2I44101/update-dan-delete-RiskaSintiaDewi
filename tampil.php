<?php  

include 'db.php';

?>
<html>
<head>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Nim</th>
				<th>Tgl_Lahir</th>
				<th>Action</th>
			</tr>
</head>
<body>
<?php

$sql = "SELECT * FROM siswa";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['nim']."</td>";
		echo "<td>".$row['tgl_lahir']."</td>";

		echo "<td>"."<a href='formedit.php?id=$id'>Edit</a> | <a href='delete.php?id=$id'>Delete</a>"."</td>";		
		// echo "<td>".$row.<a href='edit.php?nim=$row[nim]'>Edit</a>.
		// .<a href='delete.php?nim=$row[nim]'>Delete</a>."</td>";

		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($conn);

?>
</body>
</table>
</html>