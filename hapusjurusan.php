<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$kode = $_GET['kode'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from tb_jurusan where kode='$kode'");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolajurusan.php");
 
?>