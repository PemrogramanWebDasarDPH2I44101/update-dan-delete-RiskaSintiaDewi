<?php  

include 'db.php';

$id=$_GET['id'];

$sql="DELETE from siswa where id=$id";
mysqli_query($conn, $sql);
header("Location:tampil.php");

?>