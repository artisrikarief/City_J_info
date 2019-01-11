<!DOCTYPE html>
<html>
<head>
	<title>HOME | Jakarta Destination</title>
	<link rel="stylesheet" type="text/css" href="asset/css/main.css">
	<link rel="stylesheet" type="text/css" href="asset/css/slide.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="logo">
				<img src="asset/img/logo.png">
				<h2 class="logo_tulis">City J Info</h2>
			</div>
		</div>
		<div id="slider">
			<div class="slider_box">
				<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
				<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
				<input type="radio" name="slide" class="radio-nav" id="nav-3"/>

				<ul class="slide">
					<li class="slide-1">
						<div class="box_caption">
							<h1>Selamat Datang</h1>
							<p>
								<b>di City J info situs web yang membahas seputar Dki Jakarta</b>
							<br> mulai dari event,wisata dan makanan khas Dki jakarta
							</p>
						</div>
						<img src="asset/img/monas_1.png"/>
					</li>
					<li class="slide-2">
						<img src="asset/img/Selamat_datang.jpg"/>
					</li>
					<li class="slide-3">
						<img src="asset/img/GBK.jpg"/>
					</li>
				</ul>

				<div class="nav-arrow nav-next">
					<label class="nav-1" for="nav-1">></label>
					<label class="nav-2" for="nav-2">></label>
					<label class="nav-3" for="nav-3">></label>
				</div>
				<div class="nav-arrow nav-prev">
					<label class="nav-1" for="nav-1"><</label>
					<label class="nav-2" for="nav-2"><</label>
					<label class="nav-3" for="nav-3"><</label>
				</div>
			</div>
		</div>

			<?php include 'asset/navbar.php'; ?>

		<div id="konten">
			<div id="main_konten">
				<div class="isi_konten">
					<a href="event2.php">
						<h1> Seminar Impor Zaman Now! Tinggal Klik! </h1>
						<img src="event/event_2.jpg">
					</a>
						<div class="kata">
							<h2>Setiap orang tua pasti ingin memberikan hadiah terbaik utk anak-anaknya, seperti Liburan keluar negeri, mobil, ataupun gadget terbaru.</h2>
						</div>
				</div>
				<div class="isi_konten">
					<a href="event9.php">
						<h1> Australian Education </h1>
						<img src="event/event_9.jpg">
					</a>
						<div class="kata">
							<h2>PSC Progress kembali mengadakan pameran pendidikan terbesar di awal tahun untuk sekolah-sekolah dari Australia. Dapatkan informasi lengkap mengenai studi dan juga beasiswa dari perwakilan sekolah-sekolah terbaik di Australia.</h2>
						</div>
				</div>
				<div class="isi_konten">
					<a href="event11.php">
						<h1> Bangun Tjipta Golden Run </h1>
						<img src="event/event_11.jpg">
					</a>
						<div class="kata">
							<h2>Tidak berlebihan jika dikatakan tahun ke-50 adalah tahun keemasan bagi suatu perusahaan. Dalam perjalanan 50 tahun memberikan yang terbaik bagi seluruh masyarakat,</h2>
						</div>
				</div>
			</div>
			<div id="sidebar">
				<?php include 'asset/sidebar.php';?>
			</div>
		</div>
		<div id="clear"></div>
		<div id="footer">
			<?php include'asset/footer.php'; ?>
		</div>
	</div>
</body>
</html>
