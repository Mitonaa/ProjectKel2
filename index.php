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
          <a class="navbar-brand" href="index.php">
            SMK Pusdikhubad</a>
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
    
		$data = mysqli_query($conn,"SELECT * FROM `tb_beranda`; ");
		while($d = mysqli_fetch_array($data)){
			?>
    <div class="container text-center">
        <div class="row">
          <div class="col">
          <?php echo "<img src='Photo/$d[foto]' height='500' />";?>
          </div>
          <div class="col" id="postrightcolumn">
            <br>
            <p class="fs-3 text-start fw-semibold statement-slide__headline" style="margin-bottom: 0px;">Selamat Datang di</p>
            <p class="fs-1 text-start fw-bold" style="margin-bottom: 0px;">SMK Pusdikhubad</p>
            <p class="fs-5 text-start fw-semibold"> <?php echo $d['dsb']; ?></p>
            
            <?php 
          }?>
          </div>
        </div>
      </div>
      <br><br><br><br>
      <?php 
		include 'koneksi.php';
		$data = mysqli_query($conn,"SELECT * FROM `tb_jurusan`;");
		while($d = mysqli_fetch_array($data)){
			?>
      <div class="container text-center">
        <div class="row">
          <div class="col-4"><?php echo "<img src='Photo/$d[foto]' height='120' />";?></div>
          <div class="col-8 text-start"><h2 class="fs-4"><?php echo $d['kode'];?>&nbsp;(<?php echo $d['nama'];?>)</h2>
          <p class="fs-6"><?php echo $d['ds'];?></p>
          </div>
        </div>
      </div>
      <?php 
      }?>
      </div>
      <br><br>
      <footer class="footer">
      <div class="text-center p-3" >
          © 2023 Copyright:
          <a class="text-white" href="index.php">SMK Pusdikhubad</a>
</footer>
  </body>
    
</html>