<?php  
include_once("koneksi.php");  

$id = $_GET['id'];  
$sql = mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE id=$id");  

header("Location: tampil.php");  
?>