<?php
session_start();

include 'koneksi.php';

// Memeriksa apakah form login telah disubmit

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Melakukan query ke database untuk memeriksa username dan password
    $sql = "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    
    // Memeriksa apakah query mengembalikan hasil
    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username;
        header("Location: indexAdmin.php");  // Ganti dengan nama halaman selanjutnya
        exit();
    } else {
        // Login gagal
       echo "<script>alert('Gagal Login!'); window.location ='login.php'</script>";
    }

?>