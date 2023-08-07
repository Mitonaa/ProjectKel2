<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// menginput data ke database
mysqli_query($conn,"insert into tb_admin values('$id','$username','$password')");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolaadmin.php");
 
?>