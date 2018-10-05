<?php

include 'db.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$tgl_lahir=$_POST['tgl_lahir'];

$sql = "INSERT INTO siswa(id, nama, nim, tgl_lahir)
VALUES ('$id','$nama','$nim','$tgl_lahir')";
echo $sql;

if (mysqli_query($conn, $sql)){
	header("Location:tampil.php");
	}else{
		echo "Error, :".$sql."<br>".mysqli_error($conn);
	}

mysqli_close($conn);
?> 