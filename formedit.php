<?php  

include 'db.php';
$id=$_GET['id'];
$query=mysqli_query($conn, "select * from siswa where id='$id'");
$row=mysqli_fetch_array($query);

function acive_radio_button($value,$input){
	$result = $input==$result?'checked':'';
	return $result;
}	
?>

<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['id'];?>" name="id">
			<table border="0">
	<form action="update.php" method="POST">

					<tr>
						<td>Id</td> 
						<td>:</td> 
						<td><input type="text" name="id" value="<?php echo $row['id'];?>"size="30"><br></td>
					</tr>
					<tr>
						<td>Nama</td> 
						<td>:</td> 
						<td><input type="text" name="nama" value="<?php echo $row['nama'];?>"size="30"><br></td>
					</tr>
					<tr>
						<td>NIM</td> 
						<td>:</td> 
						<td><input type="text" name="nim" value="<?php echo $row['nim'];?>"size="15"><br></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td> 
						<td>:</td> 
						<td><input type="date" name="tgl_lahir" value="<?php echo $row['tgl_lahir'];?>"size="30"><br></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" value="Update"></td>
					</tr>
		</table>
	</form>
</body>
</html>