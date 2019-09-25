<!DOCTYPE html>
<html lang="en">
	<head>
		<title>SMKN 2 Bandung</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Course Project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url('assets/styles/bootstrap4/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/styles/profile_styles.css')?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('assets/styles/profile_responsive.css')?>" rel="stylesheet" type="text/css">
	</head>
<body>

<div class="super_container">

	<!-- Header -->
	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
                    <img src="<?=base_url('assets/')?>images/logo3.jpg" width="65" height="65" alt="">
					<span>SMKN 2 BANDUNG</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
                        <li class="main_nav_item"><a href="<?php echo base_url().'index.php/views/index'?>">Home</a></li>
						<li class="main_nav_item"><a href="<?php echo base_url().'index.php/views/profile' ?>">Profil </a></li>
						<li class="main_nav_item"><a href="courses.html">Data Siswa</a></li>
						<li class="main_nav_item"><a href="elements.html">Artikel</a></li>
						<li class="main_nav_item"><a href="news.html">Jurusan</a></li>
						<li class="main_nav_item"><a href="contact.html">Kontak</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?=base_url('assets/')?>images/phone-call.svg" alt="">
			<span>+43 4566 7788 2457</span>
		</div>
		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>
	</header>
	<!-- Menu -->
	<div class="menu_container menu_mm">
		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>
		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
                    <li class="main_nav_item"><a href="#">Home</a></li>
                    <li class="main_nav_item"><a href="<?php echo base_url().'index.php/views/profile' ?>">Profil </a></li>
                    <li class="main_nav_item"><a href="courses.html">Data Siswa</a></li>
                    <li class="main_nav_item"><a href="elements.html">Artikel</a></li>
                    <li class="main_nav_item"><a href="news.html">Jurusan</a></li>
                    <li class="main_nav_item"><a href="contact.html">Kontak</a></li>
				</ul>

				<!-- Menu Social -->
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>
				<div class="menu_copyright menu_mm"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
					<i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</div>
			</div>
		</div>
	</div>
	
	<!-- Home -->
	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?=base_url('assets/')?>images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Profil SMK Negeri 2 Bandung</h1>
		</div>
	</div>

	<!-- News -->
	<div class="news">
		<div class="container">
			<div class="row">
				<!-- News Column -->
				<div class="col-lg-8">
					<div class="news_posts">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="<?=base_url('assets/')?>images/un2.jpg" alt="">
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="">Sejarah SMK Negeri 2 Bandung</a>
									</div>
								</div>
							</div>
							<div class="news_post_text">
								<p class="text-dark">
									Berdasarkan dari Surat Putusan Menteri Pendidikan, Pengadjaran, dan 
									Kebudayaan No.3835/B.II.1951 yang tertanggal 30 Agustus 1951,
									diputuskan TMT 01 Agustus 1951 untuk dibuka : Sekolah Teknik Menengah (STM)
									Negeri (Bagian Bangunan, Mesin, dan Listrik) di Bandung.
									Maka berdasarkan surat keputusan tersebut didirikanlah STM Negeri I Bandung
									pada tahun 1951 di Jl. DR.Wahidin No.2 Bandung yang dipimpin oleh : W.G. Zweekhorst.					
									Berdasarkan surat keputusan Kepala Kanwil Departemen Pendidikan dan
									Kebudayaan Propinsi Jawa Barat No.148/I02.Kep/R.77 tertanggal 16-12-1977,
									memutuskan untuk memindahkan STM Negeri I Bandung ke Jalan Ciliwung No. 4 Bandung.
								</p>
							</div>
							<div class="news_post_quote">
								<p class="news_post_quote_text"><span>SMK</span><i class="text-dark"> Negeri 2 Kota Bandung berawal dari nama besar STM Negeri 1 Bandung.</i></p>
							</div><br>
							<div class="news_post_text">
								<p class="text-dark">
									Pada saat itu di Jalan Ciliwung no.4 pada awalnya adalah sebuah STM Negeri 1 
									yang didirikan sejak zaman Belanda (tahun tidak tercatat) dan STM Negeri IV Bandung.
									Kemudian STM Negeri IV Bandung dipindahkan ke Jalan Buah Batu Bandung.		
									Kepindahan STM Negeri 1 Bandung secara bertahap mulai tahun ajaran 1978/1979 dan 
									secara keseluruhan berakhir pada tahun ajaran 1979/1980 secara resmi STM Negeri 1 Bandung 
									pindah dari Jalan DR. Wahidin No.2 ke Jalan Ciliwung No.4 Bandung.
									Perubahan nama dari STM Negeri 1 menjadi SMK Negeri 2 Bandung berdasarkan SK Mendikbud 
									Nomor 036/O/1997, bulan Oktober 1997, angka indek 1,2,3 dst adalah diambil dari umur sekolah 
									dihitung dari sejak berdirinya sekolah.
								</p>
							</div>
						</div>
					</div>

					<!-- Page Nav -->
					<div class="news_page_nav">
						<ul>
							<li class="active text-center trans_200"><a href="#">01</a></li>
							<li class="text-center trans_200"><a href="#">02</a></li>
							<li class="text-center trans_200"><a href="#">03</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar Column -->
				<div class="col-lg-4">
					<div class="sidebar">
						<!-- Archives -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">
								<h2>Profil</h2>
							</div>
							<ul class="sidebar_list">
							<li class="sidebar_list_item">
								<li class="sidebar_list_item"><a id='Identitas' href="<?php echo base_url('views/identitas');?>">Identitas</a></li>
								<li class="sidebar_list_item"><a id='VisiMisi' href="<?php echo base_url('views/visi_misi');?>">Visi Misi Sekolah</a></li>
								<li class="sidebar_list_item"><a id='StrukturOrganisasi' href="<?php echo base_url('views/struktur');?>">Struktur Organisasi</a></li>
								<li class="sidebar_list_item"><a id='KepalaSekolah' href="<?php echo base_url('views/kepala_sekolah');?>">Kepala Sekolah</a></li>
								<li class="sidebar_list_item"><a id='Hubin' href="<?php echo base_url('views/hubungan_industri');?>">Hubungan Industri</a></li>
								<li class="sidebar_list_item"><a id='Kerjasama' href="<?php echo base_url('views/kerjasama_pembelajaran');?>">Kerjasama Pembelajaran</a></li>
								<li class="sidebar_list_item"><a id='TeknikMesin' href="<?php echo base_url('views/teknik_mesin');?>">Kompetensi Keahlian Teknik Mesin</a></li>
								<li class="sidebar_list_item"><a id='TeknikKomputer' href="<?php echo base_url('views/teknik_komputer');?>">Kompetensi Keahlian Teknik Komputer</a></li>
								<li class="sidebar_list_item"><a id='Animasi' href="<?php echo base_url('views/animasi');?>">Kompetensi Keahlian Seni Rupa Animasi</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
				<div class="container">
					<!-- Newsletter -->
					<div class="newsletter">
						<div class="row">
							<div class="col">
								<div class="section_title text-center">
									<h1>Ayo Bergabung Dengan SMKN 2 Bandung</h1>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<div class="newsletter_form_container mx-auto">
									<form action="post">
										<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
											<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
											<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer Content -->
					<div class="footer_content">
						<div class="row">
							<!-- Footer Column - About -->
							<div class="col-lg-3 footer_col">
								<!-- Logo -->
								<div class="logo_container">
									<div class="logo">
										<img src="<?=base_url('assets/')?>images/logo2.png" width="50" height="50" alt="">
										<span>SMKN 2 BDG</span>
									</div>
								</div>
								<p class="footer_about_text">SMKN 2 BANDUNG JUARA</p>
							</div>
							<!-- Footer Column - Menu -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Menu</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_list_item"><a href="#">Home</a></li>
										<li class="footer_list_item"><a href="#">Profil</a></li>
										<li class="footer_list_item"><a href="courses.html">Data Siswa</a></li>
										<li class="footer_list_item"><a href="news.html">Artikel</a></li>
										<li class="footer_list_item"><a href="contact.html">Jurusan</a></li>
										<li class="footer_list_item"><a href="contact.html">Kontak</a></li>
									</ul>
								</div>
							</div>
							<!-- Footer Column - Usefull Links -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Link</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_list_item"><a href="#">Testimonials</a></li>
										<li class="footer_list_item"><a href="#">FAQ</a></li>
										<li class="footer_list_item"><a href="#">Community</a></li>
										<li class="footer_list_item"><a href="#">Campus Pictures</a></li>
										<li class="footer_list_item"><a href="#">Tuitions</a></li>
									</ul>
								</div>
							</div>
							<!-- Footer Column - Contact -->
							<div class="col-lg-3 footer_col">
								<div class="footer_column_title">Kontak</div>
								<div class="footer_column_content">
									<ul>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>
											Jl. Ciliwung No.4 RT.02 RW.03, Kelurahan Cihapit Kecamatan Bandung Wetan, Bandung 40114
										</li>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>
											(022) 7234285, 4231857
										</li>
										<li class="footer_contact_item">
											<div class="footer_contact_icon">
												<img src="<?=base_url('assets/')?>images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
											</div>humas@smkn2bandung.sch.id
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Footer Copyright -->
					<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
						<div class="footer_copyright">
							<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Yogi Mulyadi</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
						</div>
						<div class="footer_social ml-sm-auto">
							<ul class="menu_social">
								<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>

<script src="<?=base_url('assets/')?>js/jquery-3.2.1.min.js"></script>
<script src="<?=base_url('assets/')?>styles/bootstrap4/popper.js"></script>
<script src="<?=base_url('assets/')?>styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/greensock/TweenMax.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/easing/easing.js"></script>
<script src="<?=base_url('assets/')?>js/news_custom.js"></script>
<script src="<?=base_url('assets/')?>js/elements_custom.js"></script>

</body>
</html>