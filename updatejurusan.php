<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$foto = $_POST['foto'];
$gambar = $_POST['gambar'];
$path = $_POST['path'];
$ds = $_POST['ds'];
$dl = $_POST['dl'];
$prestasi = $_POST['prestasi'];
 
// update data ke database
mysqli_query($conn,"update tb_jurusan set kode='$kode', nama='$nama', foto='$foto',gambar='$gambar',path='$path',ds='$ds',dl='$dl',prestasi='$prestasi' where kode='$kode'");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolajurusan.php");
 
?>