<?php  

include 'db.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$tgl_lahir=$_POST['tgl_lahir'];

$sql="UPDATE siswa SET nim='$nim', nama='$nama',tgl_lahir=$tgl_lahir where id='$id'";
mysqli_query($conn, $sql);
header("Location:tampil.php");

?>