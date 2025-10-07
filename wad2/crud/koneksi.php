<?php 
$host = "localhost";
$port = 3308;
$username = "root";
$password = "";
$dbname = "demo_php";
$koneksi = mysqli_connect("localhost", "root", "", "demo_php", 3308); 

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
}
?>