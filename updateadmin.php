<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($conn,"update tb_admin set username='$username', password='$password' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolaadmin.php");
 
?>