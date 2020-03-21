<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img2/pemprov.jpg" type="image/png">
        <title>PA'RASANGANTA</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="img2/pemprov.jpg" alt="" width="70pxl"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
								 <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bidang Sekretariat</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Umum</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Kinerja</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Program</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bidang Pengembangan</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="#">Mutasi</a></li>
										<li class="nav-item"><a class="nav-link" href="#">Kepegawaian</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#">Disiplin</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="#feature">Bidang Kesejahteraan & Kerja</a></li> 
								<li class="nav-item"><a class="nav-link" href="#video">Bidang Pengusaha Karir</a>
								<li class="nav-item"><a class="nav-link" href="#price">Bidang Perencanaan</a>
								<li class="nav-item"><a class="nav-link" href="#screen">UPT</a>
								<li class="nav-item submenu dropdown">
										<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
										<ul class="dropdown-menu">
										<li><a class="nav-icon" href="#"><i class="fa fa-fw fa-user"></i>Profile</a></li>
										<li><a class="nav-icon" href="#"><i class="fa fa-fw fa-envelope-o"></i>Send email report</a></li>
										<li><a class="nav-icon" href="#"><i class="fa fa-fw fa-gear"></i>Settings</a></li>
										<li><a class="nav-icon" href="index.html"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>
										
								</ul>
							</li>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Selamat Datang</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="pegawai.html">Pegawai</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!-- Start Sample Area -->
		<section class="sample-text-area">
			<div class="banner_inner">
				<div class="container">
					<h2>Identitas Pegawai</h2>
					<div class="row banner_content">
						<div class="col-lg-4">
							<img src="img/g.jpg" class="rounded" width="300" height="300">
							<a href="edit_pegawai.html" class="btn btn-light">Ubah Foto</a><a href="hapus.php" class="btn btn-light">Hapus Foto</a>
						</div>
						<div class="col-lg-5">
							<div class="container">
								<div class="main">
									<div class="CSSTableGenerator" >
										<table class="table table-bordered">
											<tr>
												<td colspan="2">Profil Pegawai</td>
											</tr>
											<?php foreach ($detail_pegawai as $detail_pegawai): ?>
											<tr>
												<td class="text-uppercase">NIP</td>
												<td class="text-capitalize"><?php echo $detail_pegawai->NIP ?></td>											
											</tr>
											<tr>
												<td class="text-uppercase">Nama Lengkap</td>
												<td class="text-capitalize"><?php echo $row['nama_lengkap']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Gelar Depan</td>
												<td class="text-capitalize"><?php echo $row['alamat']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Gelar Belakang</td>
												<td class="text-capitalize"><?php echo $row['k_lahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Kota Lahir</td>
												<td class="text-capitalize"><?php echo $row['t_lahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Tanggal Lahir</td>
												<td class="text-capitalize"><?php echo $row['t_lahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Agama</td>
												<td class="text-capitalize"><?php echo $row['agama']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Status</td>
												<td class="text-capitalize"><?php echo $row['status']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Jabatan Pegawai</td>
												<td class="text-capitalize"><?php echo $row['j_pegawai']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Golongan darah</td>
												<td class="text-capitalize"><?php echo $row['jabatan']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Alamat</td>
												<td class="text-capitalize"><?php echo $row['t_lahir']; ?></td>
											</tr>
											<tr>
												<td class="text-uppercase">Telf</td>
												<td class="text-capitalize"><?php echo $row['t_lahir']; ?></td>
											</tr>
											</table>
										</div>
										<a href="edit_pegawai.html" class="btn btn-danger">Edit Profil</a>
									</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<b>List File PDF</b>
					<table width="800" border='0' cellpadding="2" cellspacing="1" bgcolor="#000000">
					<tr>
					<th bgcolor="#ffffff">Judul</th>
					<th bgcolor="#ffffff" width="100">View</th>
					<th bgcolor="#ffffff" width="100">Keterangan</th>
					</tr>
					</div>
					<?php
					$query=mysql_query("SELECT * FROM data_file ORDER BY id DESC");
					while($data=mysql_fetch_array($query))
					{
					?>
					<tr>
					<td bgcolor="#ffffff"><?php echo $data[judul];?></td>
					<th bgcolor="#ffffff"><a href="view.php?id=<?php echo $data[id];?>">Lihat File</a></th>
					<th bgcolor="#ffffff"><a href="hapus.php?id=<?php echo $data[id];?>">Keterangan</a></th>
					</tr>
					<?php
					}
					?>
					</table>
					<a href="guest.html" class="btn btn-danger">Tambah Data</a>
				</div>
				</div>
			</div>
				</section>
			<!-- End Sample Area -->           
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>