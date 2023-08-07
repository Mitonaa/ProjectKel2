<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
<meta name="description" content="Bootstrap 5 navbar hover examples for any type of project, Bootstrap 5" />  

<title>SMK Pusdikhubad</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="allcss/deropdow.css">
<link rel="stylesheet" href="allcss/navbar.css">
<link rel="stylesheet" href="allcss/scr.css">
<link rel="stylesheet" href="f/css/all.css">
<link rel="stylesheet" href="allcss/footer.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SMK Pusdikhubad</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#"> Profil </a></li>
                <li class="nav-item dropdown">
                <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Jurusan </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <?php 
                include 'koneksi.php';
                $data = mysqli_query($conn,"SELECT * FROM `tb_jurusan`;");
                while($d = mysqli_fetch_array($data)){
                  ?>
                <li><a class="dropdown-item" method="GET" href="detail_jurusan.php?kode=<?php echo $d['kode']; ?>"><?php echo $d['kode'];?></a></li>
                <?php 
              }?>
                </ul>
            </li>
                <li class="nav-item"><a class="nav-link" href="login.php"> Login </a></li>
            </ul>
      </div>
    </div> 
</nav>    
    <br><br><br>
    <?php 
		include 'koneksi.php';
        $kode = $_GET['kode'];
		$data = mysqli_query($conn,"SELECT * FROM `tb_jurusan` WHERE kode='$kode'");
		while($d = mysqli_fetch_array($data)){
			?>
<div class="container text-center">
    <div class="row">
        <div class="col" style="padding-left: 0px">
            <p class="text-start fs-5 fw-bold"><?php echo $d['nama'];?>&nbsp;(<?php echo $d['kode'];?>)</p>
            <?php echo "<img src='Photo/$d[gambar]' height='150' />";?>
            <br>
            <p class="text-start fs-5 fw-semibold">Prestasi Jurusan</p>
            <p class="text-start"><?php echo $d['prestasi']; ?></p>
        </div>
        <div class="col-6">
            <p class="text-start fs-3 fw-bold">Informasi Umum</p>
            <p class="text-start">
            <?php echo $d['dl']; ?>
            <?php 
        }?>
            </p>
        </div>
    </div>
</div>
          <br><br><br>
<footer class="footer">
    <div class="text-center p-3" >
        © 2023 Copyright:<a class="text-white" href="index.php">SMK Pusdikhubad</a>
    </footer>
  </body>
</html>