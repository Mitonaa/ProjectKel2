<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$foto = $_POST['foto'];
$dsb = $_POST['dsb'];
 
// update data ke database
mysqli_query($conn,"update tb_beranda set foto='$foto', dsb='$dsb' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolaberanda.php");
 
?>