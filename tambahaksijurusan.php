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
mysqli_query($conn,"insert into tb_jurusan values('$kode','$nama','$foto','$gambar','$path','$ds','$dl','$prestasi')");
 
// mengalihkan halaman kembali ke index.php
header("location:kelolajurusan.php");
 
?>