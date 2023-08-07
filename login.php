

<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="htmlcss bootstrap menu, navbar, hover nav menu CSS examples" />
	<meta name="description" content="Bootstrap 5 navbar hover examples for any type of project, Bootstrap 5" />  

<title>Login-SMK Pusdikhubad</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="allcss/deropdow.css">
<link rel="stylesheet" href="allcss/navbar.css">
<link rel="stylesheet" href="allcss/scr.css">
<link rel="stylesheet" href="allcss/style.css">
<link rel="stylesheet" href="fontawesome-free-6.3.0-web/css/all.css">
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
  
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="validasi.php">
        <div class="txt_field">
          <input type="text" name="username">
          <span></span>
          <label for="username">Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password">
          <span></span>
          <label for="password">Password</label>
        </div>
        <input type="submit" value="Login">
		<br><br><br>
      </form>
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>