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
        <a class="navbar-brand" href="indexAdmin.php">SMK Pusdikhubad</a>
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
                <li><a class="dropdown-item" method="GET" href="detail_jurusan_admin.php?kode=<?php echo $d['kode']; ?>"><?php echo $d['kode'];?></a></li>
                <?php 
              }?>
                </ul>
            </li>
                <li class="nav-item dropdown">
              <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"><i class="fa-solid fa-user"></i> Admin </a>
              <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="kelolaadmin.php">Kelola Admin</a></li>
              <li><a class="dropdown-item" href="kelolaberanda.php">Kelola Beranda</a></li>
              <li><a class="dropdown-item" href="kelolajurusan.php">Kelola Jurusan</a></li>
                <li><a class="dropdown-item" href="login.php">Logout</a></li>
              </ul>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="dropdown">&nbsp;&nbsp;</a>
              
          </li>
        </ul>
      </div> 
     </div> 
    </nav>
    <br><br><br>
    <a href="tambahjurusan.php">TAMBAH</a>
    <table class="table">
		<tr>
      <th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Gambar</th>
			<th>Path</th>
      <th>DS</th>
      <th>DL</th>
      <th>Prestasi</th>
      <th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from tb_jurusan");
		while($d = mysqli_fetch_array($data)){
			?>
    

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['kode']; ?></td>
				<td><?php $teks = $d['nama'];
      $teks_terbatas = substr($teks, 0, 50);
      $teks_terbatas = mb_substr($teks, 0, 50);
      echo $teks_terbatas . '...';?></td>
				<td><?php echo $d['foto']; ?></td>
        <td><?php echo $d['gambar']; ?></td>
        <td><?php echo $d['path']; ?></td>
        <td> <?php $teks = $d['ds'];
      $teks_terbatas = substr($teks, 0, 50);
      $teks_terbatas = mb_substr($teks, 0, 50);
      echo $teks_terbatas . '...';?></td>
        
        <td><?php $teks = $d['dl'];
      $teks_terbatas = substr($teks, 0, 50);
      $teks_terbatas = mb_substr($teks, 0, 50);
      echo $teks_terbatas . '...';?></td></td>
        <td><?php echo $d['prestasi']; ?></td>
				<td>
        <a href="editjurusan.php?kode=<?php echo $d['kode']; ?>">EDIT</a>
					<a href="hapusjurusan.php?kode=<?php echo $d['kode']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
          <br><br><br>
<footer class="footer">
    <div class="text-center p-3" >
        © 2023 Copyright:<a class="text-white" href="indexAdmin.php">SMK Pusdikhubad</a>
    </footer>
  </body>
</html>